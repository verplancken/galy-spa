/**
 * @package Table of content
 * @version 1.0.0
 *
 */

;( function( w, $ ) {
    'use strict';

    var mobile_log = function( message ) {
        var log_ui = $( '.log-ui' );
        if( log_ui.length <= 0 ) {
            var log_ui =  $( '<span>', {
                class: 'log-ui',
                css: {
                    position: 'fixed',
                    zIndex: 9999,
                    left: 0,
                    bottom: 0,
                    width: `100vw`,
                    padding: 10,
                    background: '#FFF',
                    textAlign: 'center',
                    boxSizing: 'border-box',
                    visibility: 'hidden',
                    opacity: 0,
                }
            } )

            $( 'body' ).append( log_ui );
        }

        log_ui.text( message );
    }

    var table_of_content = function( $el, params ) {
        var self = this;
        var $container = $( `<div class="table-of-content--container"><div class="toc--inner"></div></div>` );
        var heading_data = [];
        var params = $.extend( {
            target: 'h1,h2,h3,h4,h5,h6',
            hierarchy: false,
            width: 660,
        }, params );

        $container.find( '.toc--inner' ).css( 'width', params.width );

        var filter_heading = function() {
            $el.find( params.target ).each( function() {
                var $item = $( this );
                var class_name = `toc-key-${ Math.random().toString(36).substring(7) }`;
                var trigger_sticky = $( `<div class="cot-trigger-sticky" data-key="${ class_name }"></div>` );

                $item.before( trigger_sticky );
                $item.addClass( class_name );

                heading_data.push( {
                    text: $item.text(),
                    tag: this.tagName,
                    class_name: class_name,
                } )
            } );
        }
        filter_heading();

        if( heading_data.length <= 0 ) return;

        var display = function() {
            var is_content = function() {
                return ($( w ).scrollTop() > $el.offset().top && $( w ).scrollTop() < $el.offset().top + $el.innerHeight()) ? true : false;
            }
            $( w ).on( 'scroll', function() {
                if( true == is_content() ) {
                    $( 'body' ).addClass( 'table_of_content--show' )
                } else {
                    $( 'body' ).removeClass( 'table_of_content--show' )
                }
            } )
        }
        display();

        /**
         * Build select
         */
        var build_select = function() {
            var $nav = $( '<ul class="__nav"></ul>' )
            var $select = $( '<select>' );
            $select.append( '<option value="">Select table of content</option>' );

            $.each( heading_data, function( index, item ) {
                $nav.append( `<li class="item" data-key="${ item.class_name }"><span></span></li>` );
                $select.append( `<option value="${ item.class_name }" data-tag="${ item.tag }">${ item.text }</option>` );
            } )

            $select.on( 'calc_width', function() {
                var value = this.value;
                var shadow_text = $( '<span>', {
                    class: 'shadow-text',
                    html: $select.children( `option[value="${ value }"]` ).text(),
                } );

                $select.after( shadow_text );
                var width = shadow_text.innerWidth();
                $select.width( shadow_text.innerWidth() );

                shadow_text.remove();
            } )

            return [$select, $nav];
        }

        var [$select_ui, $nav] = build_select();

        /**
         * Listen trigger sticky event
         */
        var w_scroll_timeout = null;
        var save_current_key = null;
        var cot_trigger = $( '.cot-trigger-sticky' );
        var cot_trigger_count = cot_trigger.length;
        var last_cot = cot_trigger.eq( cot_trigger_count - 1 );

        var return_current_key = function() {
            var current_key = '';

            for( var i = 0; i <= (cot_trigger_count - 1); i++ ) {
                var cot_item =  cot_trigger.eq(i);
                mobile_log( $( w ).scrollTop() - cot_item.offset().top );

                if( $( w ).scrollTop() - cot_item.offset().top == 0 ) {
                    current_key = cot_item.data( 'key' );
                }
            }

            return current_key;
        }

        var trigger_sticky_event = function() {
            $( w ).on( {
                async 'scroll' () {

                    if( ( $( w ).scrollTop() - last_cot.offset().top ) > 0 ) {
                        $( 'body' ).addClass( 'cot-is-below' )
                    } else {
                        $( 'body' ).removeClass( 'cot-is-below' )
                    }

                    var current_key = await return_current_key();
                    if( current_key == save_current_key ) return;

                    if( current_key ) {
                        $select_ui.val( current_key );
                        $select_ui.trigger( 'calc_width' );
                        $nav.children( `li[data-key="${ current_key }"]` ).addClass( '__active' ).siblings().removeClass( '__active' );
                    } else {
                        $select_ui
                        .val( '' )
                        .trigger( 'calc_width' );
                        $nav.find( '.__active' ).removeClass( '__active' );
                    }

                    save_current_key = current_key;
                },
            } )
        }
        trigger_sticky_event();

        /**
         * Add event select change
         */
        $select_ui.on( 'change', function() {
            var value = this.value;

            if( value == '' ) {
                $( 'body' ).animate( {
                    scrollTop: $el.offset().top,
                }, 300 );
                return;
            }

            var $selector = $el.find( `.${ value }` );
            //console.log($selector.offset().top);
            $( 'html' ).animate( {
                scrollTop: $selector.offset().top + 1,
            }, 300 )
        } )

        /**
         * Append document
         */
        $( 'body' ).append( function() {
            $container.find( '.toc--inner' ).append( [$nav, 'Content: ', $select_ui] );
            return $container;
        } );

        /**
         * Custom select ui
         */
        var custom_select_ui = function( $select ) {

        }

        self.get_params = function() {
            return params;
        }

        return {
            self: self,
            container: $container,
            select: $select_ui,
        };
    }

    w.table_of_content = table_of_content;

} )( window, jQuery )
