<?php
    /*
     * $Id$
     *
     * MAIA MAILGUARD LICENSE v.1.0
     *
     * Copyright 2004 by Robert LeBlanc <rjl@renaissoft.com>
     * All rights reserved.
     *
     * PREAMBLE
     *
     * This License is designed for users of Maia Mailguard
     * ("the Software") who wish to support the Maia Mailguard project by
     * leaving "Maia Mailguard" branding information in the HTML output
     * of the pages generated by the Software, and providing links back
     * to the Maia Mailguard home page.  Users who wish to remove this
     * branding information should contact the copyright owner to obtain
     * a Rebranding License.
     *
     * DEFINITION OF TERMS
     *
     * The "Software" refers to Maia Mailguard, including all of the
     * associated PHP, Perl, and SQL scripts, documentation files, graphic
     * icons and logo images.
     *
     * GRANT OF LICENSE
     *
     * Redistribution and use in source and binary forms, with or without
     * modification, are permitted provided that the following conditions
     * are met:
     *
     * 1. Redistributions of source code must retain the above copyright
     *    notice, this list of conditions and the following disclaimer.
     *
     * 2. Redistributions in binary form must reproduce the above copyright
     *    notice, this list of conditions and the following disclaimer in the
     *    documentation and/or other materials provided with the distribution.
     *
     * 3. The end-user documentation included with the redistribution, if
     *    any, must include the following acknowledgment:
     *
     *    "This product includes software developed by Robert LeBlanc
     *    <rjl@renaissoft.com>."
     *
     *    Alternately, this acknowledgment may appear in the software itself,
     *    if and wherever such third-party acknowledgments normally appear.
     *
     * 4. At least one of the following branding conventions must be used:
     *
     *    a. The Maia Mailguard logo appears in the page-top banner of
     *       all HTML output pages in an unmodified form, and links
     *       directly to the Maia Mailguard home page; or
     *
     *    b. The "Powered by Maia Mailguard" graphic appears in the HTML
     *       output of all gateway pages that lead to this software,
     *       linking directly to the Maia Mailguard home page; or
     *
     *    c. A separate Rebranding License is obtained from the copyright
     *       owner, exempting the Licensee from 4(a) and 4(b), subject to
     *       the additional conditions laid out in that license document.
     *
     * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDER AND CONTRIBUTORS
     * "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
     * LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS
     * FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE
     * COPYRIGHT OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT,
     * INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING,
     * BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS
     * OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND
     * ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR
     * TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE
     * USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
     *
     */

    // Page subtitle
    $lang['banner_subtitle'] =  "Mejlfilterinställningar";

    // Table headers
    $lang['header_addresses'] =  "E-mejladresser";
    $lang['header_miscellaneous'] =  "Diverse inställningar";
    $lang['header_address'] =  "Adress";
    $lang['header_login_info'] =  "Inloggningsparametrar ";

    // Text messages
    $lang['text_username'] =  "Användarnamn";
    $lang['text_email_address'] =  "Emejladress";
    $lang['text_password'] =  "Lösenord";
    $lang['text_reminders'] =  "Sänd komihåg för mejl i karantän?";
    $lang['text_charts'] =  "Visa grafiska diagram?";
    $lang['text_yes'] =  "Ja";
    $lang['text_no'] =  "Nej";
    $lang['text_virus_scanning'] =  "Viruskontroll";
    $lang['text_enabled'] =  "På";
    $lang['text_disabled'] =  "Av";
    $lang['text_quarantined'] =  "till karantän";
    $lang['text_labeled'] =  "namnges";
    $lang['text_discarded'] =  "kastas";
    $lang['text_detected_viruses'] =  "Detekterade virus skall ...";
    $lang['text_spam_filtering'] =  "Spamfiltrering";
    $lang['text_detected_spam'] =  "Detekterad spam skall ...";
    $lang['text_prefix_subject'] =  "Lägg till ett prefix till ämnesraden på spam";
    $lang['text_add_spam_header'] =  "Lägg till X-Spam: Header när poängen är minst";
    $lang['text_consider_mail_spam'] =  "Behandla mejl som 'Spam' när poängen är minst";
    $lang['text_quarantine_spam'] =  "Sätt mejl i karantän när när poängen är minst";
    $lang['text_attachment_filtering'] =  "Bilagetypsfiltrering";
    $lang['text_mail_with_attachments'] =  "Mejl med farliga bilagor skall ...";
    $lang['text_bad_header_filtering'] =  "brevhuvudsfiltrering av mejl";
    $lang['text_mail_with_bad_headers'] =  "Brev med felaktig header skall ...";
    $lang['text_settings_updated'] =  "Dina mejlfiltreringsinställningar har uppdaterats.";
    $lang['text_address_added'] =  "Adress %s har länkats till ditt konto.";
    $lang['text_login_failed'] =  "auktorisering har misslyckats för '%s'.";
    $lang['text_primary'] =  "Primär adress";
    $lang['text_no_addresses_linked'] =  "Inga adresser har länkats till detta konto.";
    $lang['text_new_primary_email'] =  "%s är nu din primära emejladress.";
    $lang['text_language'] =  "Visa med följande språk";
    $lang['text_charset'] =  "Visa med teckenuppsättning";
    $lang['text_theme'] = "Tema";
    $lang['text_spamtrap'] =  "Är detta ett spamfångarkonto?";
    $lang['text_auto_whitelist'] =  "Lägg till avsändare på räddat brev till din whitelist?";
    $lang['text_items_per_page'] =  "Antal mejl att visa på varje sida";
    $lang['text_digest_interval'] = "Mejl sammandragsintervall? (0 för att deaktivera, i timmar)";
    $lang['text_new_login_name'] =  "Nytt användarnamn";
    $lang['text_new_password'] =  "Nytt lösenord";
    $lang['text_confirm_new_password'] =  "Bekräfta nytt lösenord";
    $lang['text_login_name_empty'] =  "Ett användarnamn krävs.";
    $lang['text_login_name_not_allowed'] =  "Avändarnmn kan inte börja med '@'.";
    $lang['text_password_empty'] =  "Lösenordet och bekräftat lösenord måste finnas med.";
    $lang['text_password_mismatch'] =  "Lösenordet och bekräftat lösenord måste vara lika";
    $lang['text_login_name_exists'] =  "Användarnamnet som du valt används av en annan användare.";
    $lang['text_password_updated'] =  "Ditt lösenord har ändrats.";
    $lang['text_credentials_updated'] =  "Ditt användarnamn och lösenord har ändrats.";

    // Buttons
    $lang['button_add_email_address'] =  "Lägg till  Emejladress";
    $lang['button_reset'] =  "Återställ";
    $lang['button_update_misc'] =  "Uppdatera diverse inställningar";
    $lang['button_update_address'] =  "Uppdatera denna Adress inställningar";
    $lang['button_update_all_addresses'] =  "Uppdatera ALLA Adressers inställningar";
    $lang['button_make_primary'] =  "Gör primär";
    $lang['button_change_login_info'] =  "Uppdatera inloggningsparametrar";

    // Links
    $lang['link_settings'] =  "Återgå till din inställningssida";
?>