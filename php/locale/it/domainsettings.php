<?php
    /*
     * $Id: domainsettings.php 631 2005-05-03 19:19:22Z jleaver $
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
    $lang['banner_subtitle'] =  "Filtri Email prdefiniti per il Dominio";

    // Table headers
    $lang['header_domain'] =  "Domini";
    $lang['header_admins'] =  "Amministratore del Dominio";
    $lang['header_revoke'] =  "Revoca";
    $lang['header_admin_name'] =  "Amministratore";
    $lang['header_add_administrator'] =  "Aggiungi Amministratore";

    // Text labels
    $lang['text_yes'] =  "Si";
    $lang['text_no'] =  "No";
    $lang['text_virus_scanning'] =  "Scansione Virus";
    $lang['text_enabled'] =  "Abilita";
    $lang['text_disabled'] =  "Disabilita";
    $lang['text_quarantined'] =  "Quarantena";
    $lang['text_discarded'] =  "Scarta";
    $lang['text_labeled'] =  "Etichetta";
    $lang['text_detected_viruses'] =  "I virus trovati devono essere...";
    $lang['text_spam_filtering'] =  "Filtraggio Spam";
    $lang['text_detected_spam'] =  "Lo spam trovato deve essere...";
    $lang['text_prefix_subject'] =  "Aggiungi prefisso sul oggetto dello spam";
    $lang['text_add_spam_header'] =  "Aggiungi Intestazione X-Spam: quando il punteggio �";
    $lang['text_consider_mail_spam'] =  "Considera una e-mail 'Spam' quando il punteggio �";
    $lang['text_quarantine_spam'] =  "Metti lo Spam in quarantea quando il punteggio �";
    $lang['text_kill_spam'] =  "Scarta (senza Quarantena) Spam quando il punteggio �";
    $lang['text_attachment_filtering'] =  "Filtraggio tipo allegati";
    $lang['text_mail_with_attachments'] =  "Mail con l'allegato pericoloso devon essere...";
    $lang['text_bad_header_filtering'] =  "Filtraggio Intestazioni non valide";
    $lang['text_mail_with_bad_headers'] =  "Mail con le intestazioni non valide devono essere...";
    $lang['text_settings_updated'] =  "I tuoi filtri email predefiniti sono stati aggiornati.";
    $lang['text_system_default'] =  "Sistema Predefinito";
    $lang['text_no_admins'] =  "Nessun amministratore � stato selezionato per questo dominio.";
    $lang['text_no_available_admins'] =  "Nessun utente � disponibile per amministrare questo dominio.";
    $lang['text_administrators_added'] =  "Il nuovo amministratore � stato aggiunto a questo dominio.";
    $lang['text_admins_revoked'] =  "I privilegi dell'amministratore selezionato sono stati revocati.";
    $lang['text_cache_ham_question'] =  "le mail non-spam devonon essere conservate negli archivi?";
    $lang['text_enable_user_autocreation'] =  "Abilita auto creazione utenti?";
    $lang['text_domain_theme'] = "Tema predefinito per questo dominio?";

    // Buttons
    $lang['button_reset'] =  "Resetta";
    $lang['button_update_domain'] =  "Aggiorna questo dominio come predefinito";
    $lang['button_revoke'] =  "Revoca i privilegi per l'amministratore selezionato";
    $lang['button_grant'] =  "Assegna i privilegi di Amministratore";

    // Links
    $lang['link_domain_settings'] =  "Ritorna al men� Impostazione Dominio";
    $lang['link_admin_domains'] =  "Ritorna al men� Amministrazione";
?>
