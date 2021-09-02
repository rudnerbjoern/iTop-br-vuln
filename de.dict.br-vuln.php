<?php

/**
 * @copyright   Copyright (C) 2021 Björn Rudner
 * @license     https://www.gnu.org/licenses/gpl-3.0.en.html
 * @version     2021-09-02
 *
 * Localized data
 */

Dict::Add('DE DE', 'German', 'Deutsch', array(
    // Dictionary entries go here

    'Class:IPAddress/Attribute:vulnscan_assetid' => 'Asset ID vom Scan',
    'Class:IPAddress/Attribute:vulnscan_assetid+' => 'Asset ID vom Vulnerability Scanner',

    'Class:IPAddress/Attribute:last_vulnscan_date' => 'Scan Datum',
    'Class:IPAddress/Attribute:last_vulnscan_date+' => 'Datum, an dem der Scan durchgeführt wurde',

    'Class:IPAddress/Attribute:fqdn_from_vulnscan' => 'FQDN vom Scan',
    'Class:IPAddress/Attribute:fqdn_from_vulnscan+' => '',

    'Class:IPAddress/Attribute:cvss_score' => 'CVSS-Score',
    'Class:IPAddress/Attribute:cvss_score+' => '',
    'Class:IPAddress/Attribute:highvuln_count' => 'Hoch #',
    'Class:IPAddress/Attribute:highvuln_count+' => 'Anzahl der hohen Schwachstellen',
    'Class:IPAddress/Attribute:mediumvuln_count' => 'Mittel #',
    'Class:IPAddress/Attribute:mediumvuln_count+' => 'Anzahl der mittleren Schwachstellen',
    'Class:IPAddress/Attribute:lowvuln_count' => 'Gering #',
    'Class:IPAddress/Attribute:lowvuln_count+' => 'Anzahl der geringen Schwachstellen',
    'Class:IPAddress/Attribute:logvuln_count' => 'Log #',
    'Class:IPAddress/Attribute:logvuln_count+' => 'Anzahl der Log-Einträge',
    'Class:IPAddress/Attribute:cpe_os' => 'CPE OS',
    'Class:IPAddress/Attribute:cpe_os+' => 'Identifiziertes Betriebssystem als CPE (Common Platform Enumeration)',
    'Class:IPAddress:vulnscaninfo' => 'Vulnerability-Scan Information',
));
