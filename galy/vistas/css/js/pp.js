/**
 * @package cosmosclinic
 * @since 1.0.0
 */

;( function( w, $ ) {
    'use strict';

    /**
     * Global variable
     */
    w.pp = {};

    /**
     * Apply sticky sidebar
     */
    var apply_sticky_sidebar = function() {

        var $el = $( '.pp-blog-container .bt-sidebar' );
        var params = {
            target: '.bt-col-inner'
        };

        if( $el.length <= 0 ) return;
        new w.sticky_flex_sidebar( $el, params );
    }

    var archive_blog_more_posts = async function() {
        var $el = $( '.pp-blog-container .post-list' );
        if( $el.length <= 0 ) return;

        var posts = {};
        var max_pages = parseInt( $el.data( 'max-num-pages' ) );
        var paged = parseInt( $el.data( 'paged' ) );
        var cat = $el.data( 'cat' );
        var s = $el.data( 's' );
        var $w = $( w );
        var more_post_ss = null;
        var timer = 1000;
        var is_stop = false;
        var more_time = 2;
        var loading_ui = $( `<div class="__loading" style="opacity: 0;"><div class="pp-loading-bg"></div></div>` );
        var button_more_posts = $( `<div class="more-posts" style="opacity: 0;"><a href="javascript:">Show More Posts</a></div>` );

        [loading_ui, button_more_posts].forEach( function( $item ) {
            $item.on( {
                '__show.pp' () {
                    $item.css( 'opacity', 1 );
                },
                '__hide.pp' () {
                    $item.css( 'opacity', 0 );
                }
            } )
        } )

        button_more_posts.on( 'click', 'a', function( e ) {
            e.preventDefault();
            is_stop = false;
            more_time = 2;
            button_more_posts.trigger( '__hide.pp' );
            $( w ).trigger( 'scroll' );
        } )

        $el.after( [loading_ui, button_more_posts] );

        $el.on( {
            '__more_post.pp' ( e, posts, cb ) {
                loading_ui.trigger( '__show.pp' );

                setTimeout( function() {
                    $el.append( posts );
                    if( cb ) cb.call( this, $el, paged );
                    loading_ui.trigger( '__hide.pp' );
                }, timer )
            }
        } )

        $w.on( {
            'scroll.pp' () {
                if( ($w.scrollTop() + $w.innerHeight()) > ($el.offset().top + $el.innerHeight()) && is_stop == false) {
                    is_stop = true;

                    var _paged = paged + 1;
                    var is_posts = posts[_paged];
                    if( is_posts ) {
                        $el.trigger( '__more_post.pp', [is_posts.content, function() {
                            $w.trigger( 'scroll' );
                            paged += 1;
                            more_time -= 1;
                            w.history.replaceState( {} , `Paged ${_paged}`, is_posts.url );

                            if( more_time >= 0 ) {
                                is_stop = false;
                            } else {

                                if( posts[paged + 1] ) {
                                    button_more_posts.trigger( '__show.pp' );
                                }
                            }
                        }] );
                    } else {
                        is_stop = false;
                    }
                }
            }
        } )

        for( var i = paged + 1; i <= max_pages; i++ ) {
            var result = await $.ajax( {
                type: 'POST',
                url: pp_data.ajax_url,
                data: { action: 'pp_ajax_more_post_per_paged', data: {
                    paged: i,
                    cat: cat,
                    s: s } },
                error ( err ) {
                    console.log( err );
                }
            } );

            posts[i] = result;
        }
    }

    var widget_accordion_on_mobile = function() {
        var widgets = $( '.bt-sidebar .widget-area > .widget' );
        if( widgets.length <= 0 ) return;

        var arrow_svg = `<svg x="0px" y="0px" viewBox="0 0 306 306" style="enable-background:new 0 0 306 306;" xml:space="preserve"> <g> <g id="chevron-right"> <polygon points="94.35,0 58.65,35.7 175.95,153 58.65,270.3 94.35,306 247.35,153 "/> </g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> </svg>`;
        var trigger_events = function( elem ) {

            elem.on( {
                '__add_arrow.pp' () {
                    var wg = $( this );
                    var arrow = $( `<span class="arrow-icon">${arrow_svg}</span>` );

                    wg.find( '.widget-title' ).append( arrow );

                    wg.find( '.widget-title' ).on( 'click', function() {
                        wg.toggleClass( '__is-open' );
                    } )
                },
                '__init.pp' () {
                    $( this ).trigger( '__add_arrow.pp' );
                }
            } ).trigger( '__init.pp' );

            return elem;
        }

        widgets.each( function() {
            var $wg_item = trigger_events( $( this ) );
        } )
    }

    var blog_menu = function() {
        var $header = $( '#pp-header' );
        if( $header.length <= 0 ) return;

        var $menu = $( '.pp-hamburger-menu-icon' );
        var $search_mobile = $header.find( '.mini-menu > .search-icon' );
        var stickyElm = document.querySelector( 'header' );
        var observer = new IntersectionObserver(
          ([e]) => e.target.classList.toggle('is-sticky', e.intersectionRatio < 1),
          { threshold: [1] }
        );

        observer.observe( stickyElm );

        $search_mobile.on( {
            '__open.pp' () {
                $search_mobile.addClass( '__is-open' );
            },
            '__close.pp' () {
                $search_mobile.removeClass( '__is-open' );
            }
        } )
        $search_mobile.on( 'click', '> .__icon', function() {
            $search_mobile.trigger( '__open.pp' );
        } )

        $menu.on( {
            '__open.pp' () {
                $menu.addClass( '__is-open' );
            },
            '__close.pp' () {
                $menu.removeClass( '__is-open' );
            }
        } )

        $( 'body' ).on( 'click', '.pp-hamburger-menu-icon > .__icon', function( e ) {
            $menu.trigger( '__open.pp' )
        } )

        $( 'body' ).on( 'click', '.pp-hamburger-menu-icon .__close', function( e ) {
            $menu.trigger( '__close.pp' );
        } )

        $( 'body' ).on( 'click', function( e ) {

            if( ! $( e.target ).parents( '.pp-hamburger-menu-icon' ).length ) {
                $menu.trigger( '__close.pp' );
            }

            if( ! $( e.target ).parents( '.search-icon' ).length ) {
                $search_mobile.trigger( '__close.pp' );
            }
        } )
    }

    var share_post = function() {
        $( 'body' ).on( 'click', '.pp-share-post .s-item a[data-new-window="1"]', function( e ) {
            e.preventDefault();
            var url = this.href;
            var settings = `scrollbars=yes,resizable=yes,width=360,height=400`;
            window.open( url, `Share posts`, settings);
        } )
    }

    var apply_blog_single_table_of_content = function() {
        var $el = $( '.table-content-pi .post-single-content-text' );
        if( $el.length <= 0 ) return;

        new w.table_of_content( $el );
    }

    var comment_word_length = function() {
        var comment_field = $( '.pp-comment-container textarea#comment' );
        var max_word_length = parseInt( comment_field.attr( 'maxlength' ) );
        var note = $( '.pp-comment-container .note-max-length' );

        if( comment_field.length <= 0 ) return;

        var _character_text = function( num ) {
            return ( num == 1 ) ? 'character' : 'characters';
        }

        comment_field.on( 'input', function( e ) {
            var word_length = this.value.length;
            var rest = max_word_length - word_length;
            note.text( `${ rest } ${ _character_text( rest ) } length max` );
        } )
    }

    var blog_search_on_google = function() {
        var $form = $( 'form.pp-search-form' );

        $form.on( 'submit', function( e ) {
            var s_value = $( this ).find( 'input[name="s"]' ).val();
            if( ! s_value ) return false;

            var url = `https://www.google.com.au/search?q=site%3Acosmosclinic.com.au+${ s_value }`;
            w.open( url, '_blank' );

            return false;
        } )
    }

    /**
     * DOM Ready
     */
    $( function() {
        apply_sticky_sidebar();
        apply_blog_single_table_of_content();
        widget_accordion_on_mobile();
        blog_menu();
        share_post();
        comment_word_length();
        blog_search_on_google();
    } )

    /**
     * Browser load completed
     */
    $( w ).on( 'load', function() {
        archive_blog_more_posts();
        $( w ).trigger( 'scroll' );
    } )
    /**
     * @param $el element container sticky
     * @param object options
     *      space   :      20 // space top - bottom on sticky
     *      target  :     '.is-sticky' // define sticky element on scroll
     *
     */
    var sticky_flex_sidebar = function( $el, options ) {
        var self = this;
        var $w = $( w );
        var _opts = $.extend( {
            space: 20,
            target: '.is-sticky',
        }, options );

        var resize_ss = null;

        self.scroll_top = 0;

        self.$target = $el.find( _opts.target );
        self.target_info = {
            top: self.$target.offset().top,
            height: self.$target.innerHeight(),
        }

        self._height_overflow = function() {
            return self.target_info.height > $w.innerHeight();
        }

        self._sticky = function( scrollTop ) {

            if( self._height_overflow() ) {
                return (  (self.scroll_top + $w.innerHeight()) > (self.target_info.top + self.target_info.height + _opts.space) ) ? true : false;
            } else {
                return ( (self.scroll_top + _opts.space) > self.target_info.top ) ? true : false;
            }
        }

        self._calc_top_overflow = function() {
            return $w.innerHeight() - (self.target_info.height + _opts.space);
        }

        self._clear_css = function() {
            self.$target.css( { position: '', top: '' } );
        }

        $w.on( {
            'scroll.sticky_flex_sidebar' () {
                self.scroll_top = $w.scrollTop();

                if( true != self._sticky() ) {
                    self._clear_css();
                    return;
                }

                self.$target.css( {
                    position: 'sticky',
                    top: ( self._height_overflow() ) ? self._calc_top_overflow() : _opts.space,
                } )
            },
            'resize.sticky_flex_sidebar' () {

                resize_ss = setTimeout( function() {
                    clearTimeout( resize_ss );

                    self._clear_css();
                    self.target_info = {
                        top: self.$target.offset().top,
                        height: self.$target.innerHeight(),
                    }
                }, 100 );
            }
        } )

        self.get_opts = function() {
            return _opts;
        }

        self.get_elem = function() {
            return $el;
        }

        return self;
    }

    w.sticky_flex_sidebar = sticky_flex_sidebar;
} )( window, jQuery )
