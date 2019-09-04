<?php

// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Automatically generated strings for Moodle installer
 *
 * Do not edit this file manually! It contains just a subset of strings
 * needed during the very first steps of installation. This file was
 * generated automatically by export-installer.php (which is part of AMOS
 * {@link http://docs.moodle.org/dev/Languages/AMOS}) using the
 * list of strings defined in /install/stringnames.txt.
 *
 * @package   installer
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['admindirname'] = 'Administratora direktorijs';
$string['availablelangs'] = 'Pieejamās valodu pakotnes';
$string['chooselanguagehead'] = 'Valodas izvēle';
$string['chooselanguagesub'] = 'Lūdzu izvēlieties šīs instalācijas valodu. Izvēlētā valoda tiks izmantota arī kā noklusētā šīs vietnes valoda, lai gan tā var tikt nomainīta vēlāk.';
$string['databasename'] = 'Datubāzes nosaukums';
$string['databasetypehead'] = 'Izvēlēties datubāzes draiveru';
$string['dataroot'] = 'Datu direktorijs';
$string['dbprefix'] = 'Tabulu prefikss';
$string['dirroot'] = 'Moodle direktorijs';
$string['environmenthead'] = 'Vides pārbaude...';
$string['errorsinenvironment'] = 'Vides pārbaude neizdevās!';
$string['installation'] = 'Instalēšana';
$string['langdownloaderror'] = '“{$a}” valodas pakotne diemžēl netika instalēta. Instalēšana tiks turpināta angļu valodā.';
$string['memorylimithelp'] = '<p>Pašlaik iestatītais PHP atmiņas apjoma ierobežojums jūsu serverī ir {$a}.</p>

<p>Sistēmā Moodle tas vēlāk var izraisīt atmiņas izmantošanas problēmas, it īpaši tad,
   ja būsit iespējojis lielu skaitu moduļu un/vai lietotāju.</p>

<p>Ja iespējams, ieteicams konfigurēt PHP ar lielāku maksimālās atmiņas apjomu, piemēram, 40 MB. Ir vairāki veidi, kā to var izdarīt, piemēram:</p>
<ol>
<li>Ja iespējams, atkārtoti kompilējiet PHP, izmantojot <i>--enable-memory-limit</i>.
    Šādā gadījumā sistēma Moodle atmiņas apjoma ierobežojumu varēs iestatīt automātiski.</li>
<li>Ja jums ir piekļuve php.ini failam, varat mainīt tajā esošo parametra <b>memory_limit</b> iestatījumu, piemēram, uz 40 MB.  Ja jums nav piekļuves šim failam, palūdziet to izdarīt administratoram.</li>
<li>Dažos PHP serveros Moodle direktorijā var izveidot failu .htaccess, kurā ir šāda rinda:    <p><blockquote>php_value memory_limit 40M</blockquote></p>
    <p>Tomēr dažos serveros tas neļaus darboties <b>nevienai</b> PHP lapai
(atverot šīs lapas, tiks parādīti kļūdas ziņojumi), un fails .htaccess būs jānoņem.</p></li>
</ol>';
$string['paths'] = 'Ceļi';
$string['pathshead'] = 'Apstiprināt ceļus';
$string['phpversion'] = 'PHP versija';
$string['phpversionhelp'] = '<p>Sistēmā Moodle jāizmanto PHP, kuras versija ir vismaz 4.3.0 vai 5.1.0 (versijai 5.0.x piemīt vairākas zināmas problēmas).</p>
<p>Jūs pašlaik lietojat versiju {$a}</p>
<p>Ir jājaunina PHP vai jāpāriet uz resursdatoru, kurā tiek izmantota jaunāka PHP versija.</p>
(Ja PHP versija ir 5.0.x, var arī atkāpties uz versiju 4.4.x)</p>';
$string['welcomep10'] = '{$a->installername} ({$a->installerversion})';
$string['welcomep20'] = 'Jūs redzat šo lapu, jo esat veiksmīgi instalējis un
    palaidis savā datorā pakotni <strong>{$a->packname} {$a->packversion}</strong>. Apsveicam!';
$string['welcomep30'] = 'Šajā <strong>{$a->installername}</strong> laidienā ir iekļautas lietojumprogrammas,
    kas paredzētas, lai izveidotu vidi, kurā darbosies sistēma <strong>Moodle</strong>, proti:';
$string['welcomep40'] = 'Pakotnē ir iekļauta arī sistēma <strong>Moodle {$a->moodlerelease} ({$a->moodleversion})</strong>.';
$string['welcomep50'] = 'Visu šīs pakotnes lietojumprogrammu izmantošanu regulē attiecīgo
    licenču nosacījumi. Visā <strong>{$a->installername}</strong> pakotnē ir iekļauts
    <a href="http://www.opensource.org/docs/definition_plain.html">atklātais pirmkods</a>, un tā tiek izplatīta
    saskaņā ar <a href="http://www.gnu.org/copyleft/gpl.html">GPL</a> licences nosacījumiem.';
$string['welcomep60'] = 'Nākamajās lapās tiks sniegti vienkārši norādījumi par to, kā
    datorā konfigurēt un iestatīt sistēmu <strong>Moodle</strong>. Varat akceptēt noklusējuma
    iestatījumus vai varat tos mainīt, lai pielāgotu savām vajadzībām.';
$string['welcomep70'] = 'Noklikšķiniet uz pogas Tālāk, lai turpinātu sistēmas <strong>Moodle</strong> instalēšanu.';
$string['wwwroot'] = 'Tīmekļa adrese';
