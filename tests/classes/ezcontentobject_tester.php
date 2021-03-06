<?php
//
//
// ## BEGIN COPYRIGHT, LICENSE AND WARRANTY NOTICE ##
// SOFTWARE NAME: eZ Find
// SOFTWARE RELEASE: 2.0.x
// COPYRIGHT NOTICE: Copyright (C) 1999-2014 eZ Systems AS
// SOFTWARE LICENSE: GNU General Public License v2.0
// NOTICE: >
//   This program is free software; you can redistribute it and/or
//   modify it under the terms of version 2.0  of the GNU General
//   Public License as published by the Free Software Foundation.
//
//   This program is distributed in the hope that it will be useful,
//   but WITHOUT ANY WARRANTY; without even the implied warranty of
//   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
//   GNU General Public License for more details.
//
//   You should have received a copy of version 2.0 of the GNU General
//   Public License along with this program; if not, write to the Free
//   Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston,
//   MA 02110-1301, USA.
//
//
// ## END COPYRIGHT, LICENSE AND WARRANTY NOTICE ##
//

/**
 * File containing the eZContentObjectTester class.
 *
 * @package eZFind
 */
class eZContentObjectTester extends eZContentObject
{
    public $ClassName;
    public $ClassIdentifier;

    /**
     * Makes the following function attributes field attribtues, for testing purposes :
     *  - class_name
     *  - class_identifier
     *  - main_node_id
     *  - main_parent_node_id
     *
     * @return the overridden definition array
     */
    public static function definition()
    {
        $definitionOverride = array( 'fields' => array( 'class_name' =>
                                                            array( 'name' =>     "LocalClassName",
                                                                   'datatype' => 'mixed' ),
                                                        'class_identifier' =>
                                                            array( 'name' =>     "LocalClassIdentifier",
                                                                   'datatype' => 'mixed' ),
                                                        'main_node_id' =>
                                                            array( 'name' =>     "MainNodeId",
                                                                   'datatype' => 'mixed' ),
                                                        'main_parent_node_id' =>
                                                            array( 'name' =>     "MainParentNodeId",
                                                                   'datatype' => 'mixed' )
                                                      )
                                   );

        $definition = array_merge_recursive( parent::definition(), $definitionOverride );
        $definition['class_name'] = __CLASS__;

        unset( $definition['function_attributes']['class_name'] );
        unset( $definition['function_attributes']['class_identifier'] );
        unset( $definition['function_attributes']['main_node_id'] );
        unset( $definition['function_attributes']['main_parent_node_id'] );

        return $definition;
    }
}
?>
