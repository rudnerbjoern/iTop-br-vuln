<?php

/**
 * @copyright   Copyright (C) 2021 Björn Rudner
 * @license     https://www.gnu.org/licenses/gpl-3.0.en.html
 * @version     2021-09-02
 *
 * Localized data
 */

Dict::Add('EN US', 'English', 'English', array(
    // Dictionary entries go here

    'Class:IPAddress/Attribute:vulnscan_assetid' => 'Asset ID from scan',
    'Class:IPAddress/Attribute:vulnscan_assetid+' => 'Asset ID from vulnerability scan',

    'Class:IPAddress/Attribute:last_vulnscan_date' => 'Last scan date',
    'Class:IPAddress/Attribute:last_vulnscan_date+' => 'Date when the IP has been scanned last',

    'Class:IPAddress/Attribute:fqdn_from_vulnscan' => 'FQDN from scan',
    'Class:IPAddress/Attribute:fqdn_from_vulnscan+' => '',

    'Class:IPAddress/Attribute:cvss_score' => 'CVSS score',
    'Class:IPAddress/Attribute:cvss_score+' => '',
    'Class:IPAddress/Attribute:highvuln_count' => 'High #',
    'Class:IPAddress/Attribute:highvuln_count+' => 'Number of high vulnerabilities',
    'Class:IPAddress/Attribute:mediumvuln_count' => 'Medium #',
    'Class:IPAddress/Attribute:mediumvuln_count+' => 'Number of medium vulnerabilities',
    'Class:IPAddress/Attribute:lowvuln_count' => 'Low #',
    'Class:IPAddress/Attribute:lowvuln_count+' => 'Number of low vulnerabilities',
    'Class:IPAddress/Attribute:logvuln_count' => 'Log #',
    'Class:IPAddress/Attribute:logvuln_count+' => 'Number of log entries',
    'Class:IPAddress/Attribute:cpe_os' => 'CPE OS',
    'Class:IPAddress/Attribute:cpe_os+' => 'Identified CPE (Common Platform Enumeration) of the operating system',
    'Class:IPAddress:vulnscaninfo' => 'Vulnerability scan Information',
));
