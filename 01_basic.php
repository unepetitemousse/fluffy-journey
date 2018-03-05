<?php
/**
 * Script basic PHP + CSS
 *
 * But:
 * - Se repérer dans du code Html proche de la réalité
 * - Utiliser les feuilles de style
 * - Corriger des bugs dans des instructions simples PHP
 *
 * Pour réussir ce module:
 * - Afficher le texte « Hello World » sur cette page, en utilisant $variable
 * - Utiliser les styles pour afficher le texte en rouge, centré
 * - Corriger l'avertissement
 *
 * Bonus:
 * - Mettre en italique le contenu des paragraphes, sur fond coloré
 * - Corriger les proportions de l'image
 *
 * @see http://phpfiddle.org/
 */

$variable = "World"
$smart_maths = 7 / 0;
?>
<html>
<head>
  <meta charset="UTF-8">
  <title>Hello World !</title>
  <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha256-3edrmyuQ0w65f8gfBsqowzjJe2iM6n0nKciPUp8y+7E="
      crossorigin="anonymous"></script>
  <script>document.documentElement.className = document.documentElement.className.replace(/(^|\s)client-nojs(\s|$)/, "$1client-js$2");</script>
  <script>(window.RLQ = window.RLQ || []).push(function () {
          mw.config.set({
              "wgCanonicalNamespace": "",
              "wgCanonicalSpecialPageName": false,
              "wgNamespaceNumber": 0,
              "wgPageName": "Scope_resolution_operator",
              "wgTitle": "Scope resolution operator",
              "wgCurRevisionId": 818401061,
              "wgRevisionId": 818401061,
              "wgArticleId": 9334188,
              "wgIsArticle": true,
              "wgIsRedirect": false,
              "wgAction": "view",
              "wgUserName": null,
              "wgUserGroups": ["*"],
              "wgCategories": ["Articles needing additional references from August 2017", "All articles needing additional references", "Articles containing Hebrew-language text", "Articles with example C++ code", "Operators (programming)", "PHP software", "Articles with example Ruby code"],
              "wgBreakFrames": false,
              "wgPageContentLanguage": "en",
              "wgPageContentModel": "wikitext",
              "wgSeparatorTransformTable": ["", ""],
              "wgDigitTransformTable": ["", ""],
              "wgDefaultDateFormat": "dmy",
              "wgMonthNames": ["", "January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
              "wgMonthNamesShort": ["", "Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
              "wgRelevantPageName": "Scope_resolution_operator",
              "wgRelevantArticleId": 9334188,
              "wgRequestId": "Wpa8fwpAICwAACyfBMcAAABO",
              "wgIsProbablyEditable": true,
              "wgRelevantPageIsProbablyEditable": true,
              "wgRestrictionEdit": [],
              "wgRestrictionMove": [],
              "wgFlaggedRevsParams": {"tags": {}},
              "wgStableRevisionId": null,
              "wgWikiEditorEnabledModules": [],
              "wgBetaFeaturesFeatures": [],
              "wgMediaViewerOnClick": true,
              "wgMediaViewerEnabledByDefault": true,
              "wgPopupsShouldSendModuleToUser": true,
              "wgPopupsConflictsWithNavPopupGadget": false,
              "wgVisualEditor": {
                  "pageLanguageCode": "en",
                  "pageLanguageDir": "ltr",
                  "pageVariantFallbacks": "en",
                  "usePageImages": true,
                  "usePageDescriptions": true
              },
              "wgPreferredVariant": "en",
              "wgMFExpandAllSectionsUserOption": true,
              "wgMFEnableFontChanger": true,
              "wgMFDisplayWikibaseDescriptions": {
                  "search": false,
                  "nearby": false,
                  "watchlist": false,
                  "tagline": false
              },
              "wgRelatedArticles": null,
              "wgRelatedArticlesUseCirrusSearch": true,
              "wgRelatedArticlesOnlyUseCirrusSearch": false,
              "wgULSCurrentAutonym": "English",
              "wgNoticeProject": "wikipedia",
              "wgCentralNoticeCookiesToDelete": [],
              "wgCentralNoticeCategoriesUsingLegacy": ["Fundraising", "fundraising"],
              "wgCategoryTreePageCategoryOptions": "{\"mode\":0,\"hideprefix\":20,\"showcount\":true,\"namespaces\":false}",
              "wgWikibaseItemId": "Q7434446",
              "wgScoreNoteLanguages": {
                  "arabic": "العربية",
                  "catalan": "català",
                  "deutsch": "Deutsch",
                  "english": "English",
                  "espanol": "español",
                  "italiano": "italiano",
                  "nederlands": "Nederlands",
                  "norsk": "norsk",
                  "portugues": "português",
                  "suomi": "suomi",
                  "svenska": "svenska",
                  "vlaams": "West-Vlams"
              },
              "wgScoreDefaultNoteLanguage": "nederlands",
              "wgCentralAuthMobileDomain": false,
              "wgCodeMirrorEnabled": false,
              "wgVisualEditorToolbarScrollOffset": 0,
              "wgVisualEditorUnsupportedEditParams": ["undo", "undoafter", "veswitched"],
              "wgEditSubmitButtonLabelPublish": true
          });
          mw.loader.state({
              "ext.gadget.charinsert-styles": "ready",
              "ext.globalCssJs.user.styles": "ready",
              "ext.globalCssJs.site.styles": "ready",
              "site.styles": "ready",
              "noscript": "ready",
              "user.styles": "ready",
              "user": "ready",
              "user.options": "ready",
              "user.tokens": "loading",
              "ext.pygments": "ready",
              "ext.cite.styles": "ready",
              "wikibase.client.init": "ready",
              "ext.visualEditor.desktopArticleTarget.noscript": "ready",
              "ext.uls.interlanguage": "ready",
              "ext.wikimediaBadges": "ready",
              "mediawiki.legacy.shared": "ready",
              "mediawiki.legacy.commonPrint": "ready",
              "mediawiki.sectionAnchor": "ready",
              "mediawiki.skinning.interface": "ready",
              "skins.vector.styles": "ready",
              "ext.globalCssJs.user": "ready",
              "ext.globalCssJs.site": "ready"
          });
          mw.loader.implement("user.tokens@1dqfd7l", function ($, jQuery, require, module) {/*@nomin*/
              mw.user.tokens.set({"editToken": "+\\", "patrolToken": "+\\", "watchToken": "+\\", "csrfToken": "+\\"});
          });
          mw.loader.load(["ext.cite.a11y", "site", "mediawiki.page.startup", "mediawiki.user", "mediawiki.hidpi", "mediawiki.page.ready", "mediawiki.toc", "mediawiki.searchSuggest", "ext.gadget.teahouse", "ext.gadget.ReferenceTooltips", "ext.gadget.watchlist-notice", "ext.gadget.DRN-wizard", "ext.gadget.charinsert", "ext.gadget.refToolbar", "ext.gadget.extra-toolbar-buttons", "ext.gadget.switcher", "ext.centralauth.centralautologin", "mmv.head", "mmv.bootstrap.autostart", "ext.popups", "ext.visualEditor.desktopArticleTarget.init", "ext.visualEditor.targetLoader", "ext.eventLogging.subscriber", "ext.wikimediaEvents", "ext.navigationTiming", "ext.uls.eventlogger", "ext.uls.init", "ext.uls.interface", "ext.3d", "ext.centralNotice.geoIP", "ext.centralNotice.startUp", "skins.vector.js"]);
      });</script>
  <link rel="stylesheet"
        href="/w/load.php?debug=false&amp;lang=en&amp;modules=ext.cite.styles%7Cext.pygments%2CwikimediaBadges%7Cext.uls.interlanguage%7Cext.visualEditor.desktopArticleTarget.noscript%7Cmediawiki.legacy.commonPrint%2Cshared%7Cmediawiki.sectionAnchor%7Cmediawiki.skinning.interface%7Cskins.vector.styles%7Cwikibase.client.init&amp;only=styles&amp;skin=vector">
  <script async=""
          src="/w/load.php?debug=false&amp;lang=en&amp;modules=startup&amp;only=scripts&amp;skin=vector"></script>
  <link rel="stylesheet"
        href="/w/load.php?debug=false&amp;lang=en&amp;modules=site.styles&amp;only=styles&amp;skin=vector">
  <meta name="generator" content="MediaWiki 1.31.0-wmf.22">
  <meta name="referrer" content="origin">
  <meta name="referrer" content="origin-when-crossorigin">
  <meta name="referrer" content="origin-when-cross-origin">
  <style>
    p {
      font-weight: 800;
      color: darkgray;
      background-color: antiquewhite;
      border-color: transparent;
    }

    .lua {
      color: yellow;
    }

    .parsoid-body {
      padding: 1em;
      background-color: #ffffff;
      color: #222222;
      direction: ltr;
    }

    .pdaa {
      color: #FF0000;
    }

    .body-content {
      position: relative;
      line-height: 1.6;
      font-size: 0.875em;
      z-index: 0;
    }
  </style>
  <link rel="search" type="application/opensearchdescription+xml" href="/w/opensearch_desc.php" title="Wikipedia (en)">
  <link rel="EditURI" type="application/rsd+xml" href="//en.wikipedia.org/w/api.php?action=rsd">
  <link rel="license" href="//creativecommons.org/licenses/by-sa/3.0/">
  <link rel="canonical" href="https://en.wikipedia.org/wiki/Scope_resolution_operator">
  <link rel="dns-prefetch" href="//login.wikimedia.org">
  <link rel="dns-prefetch" href="//meta.wikimedia.org">
  <!--[if lt IE 9]>
  <script
      src="/w/load.php?debug=false&amp;lang=en&amp;modules=html5shiv&amp;only=scripts&amp;skin=vector&amp;sync=1"></script>
  <![endif]-->
  <style>
    pre {
      color: #000;
      background-color: #f8f9fa;
      border: 1px solid #eaecf0;
      padding: 1em;
      white-space: pre-wrap;
    }

    .fifr {
      color: #37ffac;
    }

    a {
      text-decoration: none;
      color: #0645ad;
      background: none;
    }

    .auaa {
      text-align: center;
    }

    .coconut {
      text-align: right;
    }
  </style>
</head>
<body>

<h2>Pour réussir:</h2>
<ul>
  <li>Afficher le texte « Hello World » sur cette page, en utilisant $variable</li>
  <li>Utiliser les styles pour afficher le texte en rouge, centré</li>
  <li>Corriger les bugs empêchant de charger la page</li>
</ul>

<h2>Bonus</h2>
<ul>
  <li>Mettre en italique le contenu des paragraphes, sur fond coloré</li>
  <li>Corriger les proportions de l'image</li>
</ul>

<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam,
  eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam
  voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione
  voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci
  velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim
  ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi
  consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur,
  vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</p>

<img src="http://lorempixel.com/400/200/sports/1/Corrigez-moi/" height="400" width="200"/>
<h1 class="s1">
  <?php
  echo 'Hello $variable';
  ?>
</h1>
<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque
  corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui
  officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita
  distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime
  placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut
  officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae.
  Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut
  perferendis doloribus asperiores repellat.</p>
</body>
</html>

