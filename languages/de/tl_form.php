<?php if (!defined('TL_ROOT')) die('You cannot access this file directly!');

/**
 * Contao Open Source CMS
 * Copyright (C) 2005-2013 Leo Feyer
 *
 * Formerly known as TYPOlight Open Source CMS.
 *
 * This program is free software: you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation, either
 * version 3 of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with this program. If not, please visit the Free
 * Software Foundation website at <http://www.gnu.org/licenses/>.
 *
 * PHP version 5
 * @copyright  Christopher Bölter 2013
 * @author     Christopher Bölter <http://www.cogizz.de>
 * @package    efgoptin
 * @license    LGPL
 * @filesource
 */

$GLOBALS['TL_LANG']['tl_form']['optin'] = array('Double Opt-In');
$GLOBALS['TL_LANG']['tl_form']['optinEmailField'] = array('Double Opt-In Empfängerfeld','');
$GLOBALS['TL_LANG']['tl_form']['optinEmailSender'] = array('Double Opt-In Absender','');
$GLOBALS['TL_LANG']['tl_form']['optinEmailReply'] = array('Double Opt-In Antwort-Adresse','');
$GLOBALS['TL_LANG']['tl_form']['optinEmailSubject'] = array('Double Opt-In Betreff','');
$GLOBALS['TL_LANG']['tl_form']['optinEmailText'] = array('Double Opt-In Text','');
$GLOBALS['TL_LANG']['tl_form']['optinEmailTemplate'] = array('Double Opt-In Mail-Template','');
$GLOBALS['TL_LANG']['tl_form']['optinTokenField'] = array('Token-Feld','Hiddenfield in dem der Token für das Double Opt-In gespeichert wird');
$GLOBALS['TL_LANG']['tl_form']['optinFeedbackField'] = array('Feedback-Feld','Hiddenfield in dem das Feedback für das Double Opt-In gespeichert wird');
$GLOBALS['TL_LANG']['tl_form']['optinJumpTo'] = array('Weiterleitung','Zielseite für erfolgreichen Double Opt-In');
$GLOBALS['TL_LANG']['tl_form']['optinJumpToError'] = array('Weiterleitung Fehlerseite','Zielseite für fehlgeschlagenen Double Opt-In');
$GLOBALS['TL_LANG']['tl_form']['optinCondition'] = array('Double Opt-In Bedingung', '');
$GLOBALS['TL_LANG']['tl_form']['optinConditionField'] = array('Double Opt-In Bedingungsfeld', 'Das Feld an das das Double-Opt-In gebunden ist. (funktioniert nur mit checkboxen)');
?>