/**
 * Javascript sample.
 *
 * You can use this Javascript as start for your project.
 *
 */

(function( $ )
{

  "use strict";

  $( "[id*='scheduling/enable']" ).on( 'change', function()
  {
    $( 'input[type="datetime"]' ).val( '' );
  } );

  // reset to default
  $( document ).on( 'click',
    'button[name="reset-to-default"]',
    function( e )
    {
      if( !confirm( $( this ).data( 'confirm' ) ) ) {
        return false;
      }

      return true;

    } );

  // add
  $( 'button.wpxmp-button-add' ).on( 'click', function( e )
  {

    e.preventDefault();

    var $source = $( "[id*='" + $( this ).data( 'source' ) + "']" ),
        $target = $( "[id*='" + $( this ).data( 'target' ) + "']" ),
        value   = '',
        text    = '';

    switch( $source.get( 0 ).tagName.toLowerCase() ) {

      case 'input':
        value = $source.data( 'value' ) || $source.val();
        text = $source.data( 'text' ) || $source.val();
        $source.val( '' );
        break;

      case 'select':
        value = $( 'option:selected', $source ).val();
        text = $( 'option:selected', $source ).text();
        break;

    }

    if( value !== '' ) {
      $target.append( '<option value="' + value + '">' + text + '</option>' );
    }


  } );

  // remove
  $( 'button.wpxmp-button-remove' ).on( 'click', function( e )
  {

    e.preventDefault();

    $( 'option:selected', "[id*='" + $( this ).data( 'target' ) + "']" ).remove();

  } );

  // This is a hack to send in POST/GET the new value in the multiple select tag
  $( 'form' ).submit( function()
  {
    $( 'select[multiple]' ).each( function()
    {
      $( this ).find( 'option' ).attr( 'selected', 'selected' );
    } );
  } );


})( jQuery );