<?php

if ( !function_exists( 'be_gdpr_privacy_ok' ) ){
    function be_gdpr_privacy_ok($name){
        $privacyPref = array_key_exists( 'be_gdpr_privacy',$_COOKIE ) ?  json_decode(stripslashes($_COOKIE['be_gdpr_privacy'])) : array() ;

        $options = Be_Gdpr_Options::getInstance()->get_options();
        
        if( array_key_exists( $name, $options ) ){
            return in_array($name, $privacyPref);
        } else {
            return true;
        }

		
    }
}

if( !function_exists( 'be_gdpr_register_option' ) ){
    function be_gdpr_register_option( $id, $args ){
        if( empty( $id ) || empty( $args ) || !is_array( $args ) ) {
            trigger_error( __( 'Incorrect Arguments to register a consent condition', 'be-gdpr' ), E_USER_NOTICE );
        }
        Be_Gdpr_Options::getInstance()->register_option($id,$args);
    }
}

if( !function_exists( 'be_gdpr_deregister_option' ) ){
    function be_gdpr_deregister_option( $id ){
        if( empty( $id ) ) {
            trigger_error( __( 'Incorrect Arguments to de-register a consent condition', 'be-gdpr' ), E_USER_NOTICE );
        }
        Be_Gdpr_Options::getInstance()->deregister_option($id);
    }
}