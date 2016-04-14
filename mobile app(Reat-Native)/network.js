"use strict";
/**
/**
 ==================================================================================
 Description:       desc
 Creation Date:     3/13/16
 Author:            Nikorel
 ==================================================================================
 Revision History
 ==================================================================================
 Rev    Date        Author           Task                Description
 ==================================================================================
 1      2/2/16    Nikorel         TaskNumber          Created
 ==================================================================================
 */

var React = require('react-native');
var {NetInfo} = React;

var is_device_online = function(callback) {
    NetInfo.isConnected.fetch().done((isConnected) => {
        return callback(isConnected);
    });
};

exports.is_device_online = is_device_online;