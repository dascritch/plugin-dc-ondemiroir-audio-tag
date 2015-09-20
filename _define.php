<?php
# -- BEGIN LICENSE BLOCK ---------------------------------------
#
# This file is part of Dotclear 2.
#
# Copyright (c) 2003-2013 Olivier Meunier & Association Dotclear
# Licensed under the GPL version 2.0 license.
# See LICENSE file or
# http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
#
# -- END LICENSE BLOCK -----------------------------------------
if (!defined('DC_RC_PATH')) { return; }

$this->registerModule(
        /* Name */                      "OndeMiroir Audio",
        /* Description*/                "OndeMiroir Audio",
        /* Author */                    "Da Scritch",
        /* Version */                   '0.4',
        array(
            'permissions' 	=>			'admin',
            'type'  		=>			'plugin'
        )
);