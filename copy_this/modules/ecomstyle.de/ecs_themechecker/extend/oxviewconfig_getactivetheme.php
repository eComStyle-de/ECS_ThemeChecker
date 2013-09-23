<?php

	class oxviewconfig_getactivetheme extends oxviewconfig_getactivetheme_parent
	{
    /**
     * Returns active theme name
     *
     * @return string
     */
    public function getActiveTheme()
    {
        if ( $this->_sActiveTheme === null ) {
            $oTheme = oxNew( 'oxTheme' );
            $this->_sActiveTheme = $oTheme->getActiveThemeId();
        }
        return $this->_sActiveTheme;
    }

	}