<?php

/**
 * Dynamic WordPress Header - Ozland Care Refined
 * @package ozlandcare
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php ozlandcare_output_critical_image_preload(); ?>

    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&family=Plus+Jakarta+Sans:ital,wght@0,200;0,800;1,200;1,800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#5f2a7d',
                        primaryDark: '#4a2062',
                        secondary: '#40b450',
                        secondarySoft: '#d9f2b1',
                        blue: '#0a74bb',
                    },
                    fontFamily: {
                        sans: ['Plus Jakarta Sans', 'Inter', 'sans-serif'],
                    }
                }
            }
        }
    </script>

    <style>
        /* ===== HEADER FIXED SYSTEM ===== */
        #masthead {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 100;
            transition: transform 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }

        /* Top bar animation */
        #top-header {
            transition: all 0.4s ease-in-out;
            max-height: 200px;
            overflow: hidden;
            opacity: 1;
        }

        .hide-top #top-header {
            max-height: 0;
            opacity: 0;
            transform: translateY(-100%);
        }

        body {
            transition: padding-top 0.4s ease-in-out;
        }

        .primary-menu-container>ul {
            display: flex;
            align-items: center;
            gap: 0;
            margin: 0;
            padding: 0;
            list-style: none;
        }

        .primary-menu-container>ul>li {
            position: relative;
            display: flex;
            align-items: center;
        }

        .primary-menu-container>ul>li:not(:last-child)::after {
            content: "";
            width: 1px;
            height: 20px;
            background: #d8d0dd;
            position: absolute;
            right: 0;
            top: 50%;
            transform: translateY(-50%);
        }

        .primary-menu-container>ul>li>a {
            position: relative;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            padding: 0.8rem 1.15rem;
            color: #0f172a;
            font-size: 14px;
            font-weight: 700;
            letter-spacing: -0.01em;
            line-height: 1;
            white-space: nowrap;
            transition: color 0.25s ease;
        }

        .primary-menu-container>ul>li>a::before {
            content: "";
            position: absolute;
            left: 1.15rem;
            right: 1.15rem;
            bottom: 0.25rem;
            height: 2px;
            border-radius: 999px;
            background: #5f2a7d;
            transform: scaleX(0);
            transform-origin: center;
            transition: transform 0.25s ease;
        }

        .primary-menu-container>ul>li>a:hover,
        .primary-menu-container>ul>li>a:focus-visible,
        .primary-menu-container>ul>.current-menu-item>a,
        .primary-menu-container>ul>.current-menu-ancestor>a {
            color: #5f2a7d;
            outline: none;
        }

        .primary-menu-container>ul>li>a:hover::before,
        .primary-menu-container>ul>li>a:focus-visible::before,
        .primary-menu-container>ul>.current-menu-item>a::before,
        .primary-menu-container>ul>.current-menu-ancestor>a::before {
            transform: scaleX(1);
        }

        .primary-menu-container .menu-item-has-children>a::after {
            content: "\f078";
            font-family: "Font Awesome 6 Free";
            font-size: 0.65rem;
            font-weight: 900;
            color: #5f2a7d;
            transition: transform 0.25s ease;
        }

        /* ==========================================================
   PREMIUM DEFAULT DESKTOP SUBMENU
   Does NOT affect the custom Our Services submenu
========================================================== */

        .primary-menu-container .sub-menu {
            position: absolute;
            top: calc(100% + 18px);
            left: 50%;
            width: 290px;
            margin: 0;
            padding: 10px 12px;
            list-style: none;
            overflow: visible;
            border: 1px solid rgba(95, 42, 125, 0.10);
            border-radius: 18px;
            background:
                radial-gradient(circle at top right, rgba(95, 42, 125, 0.055), transparent 34%),
                linear-gradient(145deg, #ffffff 0%, #fdfbfe 100%);
            box-shadow:
                0 26px 65px -25px rgba(43, 18, 58, 0.38),
                0 8px 24px -18px rgba(95, 42, 125, 0.24);
            opacity: 0;
            visibility: hidden;
            pointer-events: none;
            transform: translate(-50%, 10px);
            transition:
                opacity 0.22s ease,
                transform 0.22s ease,
                visibility 0.22s ease;
        }

        /*
 * Invisible hover bridge between parent
 * menu item and dropdown.
 */
        .primary-menu-container .sub-menu::before {
            content: "";
            position: absolute;
            left: 0;
            right: 0;
            top: -20px;
            height: 20px;
        }

        /*
 * Premium top accent.
 */
        .primary-menu-container .sub-menu::after {
            content: "";
            position: absolute;
            top: 0;
            left: 24px;
            right: 24px;
            height: 2px;
            border-radius: 0 0 999px 999px;
            background: linear-gradient(90deg,
                    transparent 0%,
                    rgba(95, 42, 125, 0.45) 18%,
                    #5f2a7d 50%,
                    rgba(95, 42, 125, 0.45) 82%,
                    transparent 100%);
        }

        .primary-menu-container .menu-item-has-children:hover>.sub-menu,
        .primary-menu-container .menu-item-has-children:focus-within>.sub-menu {
            opacity: 1;
            visibility: visible;
            pointer-events: auto;
            transform: translate(-50%, 0);
        }

        .primary-menu-container .menu-item-has-children:hover>a::after,
        .primary-menu-container .menu-item-has-children:focus-within>a::after {
            transform: rotate(180deg);
        }


        /* ==========================================================
   DEFAULT SUBMENU ITEMS
========================================================== */

        .primary-menu-container .sub-menu li {
            position: relative;
            display: block;
            margin: 0;
            padding: 0;
        }

        /*
 * Horizontal divider between submenu items.
 */
        .primary-menu-container .sub-menu li:not(:last-child)::after {
            content: "";
            position: absolute;
            left: 14px;
            right: 14px;
            bottom: 0;
            height: 1px;
            background: linear-gradient(90deg,
                    transparent 0%,
                    rgba(95, 42, 125, 0.09) 12%,
                    rgba(95, 42, 125, 0.14) 50%,
                    rgba(95, 42, 125, 0.09) 88%,
                    transparent 100%);
        }


        /* ==========================================================
   DEFAULT SUBMENU LINKS
========================================================== */

        .primary-menu-container .sub-menu a {
            position: relative;
            display: flex;
            width: 100%;
            min-height: 48px;
            align-items: center;
            justify-content: space-between;
            gap: 12px;
            padding: 13px 14px;
            border-radius: 10px;
            color: #334155;
            background: transparent;
            font-size: 13px;
            font-weight: 700;
            line-height: 1.4;
            letter-spacing: -0.01em;
            transition:
                color 0.22s ease,
                background-color 0.22s ease,
                padding-left 0.22s ease,
                box-shadow 0.22s ease;
        }

        /*
 * Removes the previous left-side dots.
 */
        .primary-menu-container .sub-menu a::before {
            display: none;
            content: none;
        }


        /* ==========================================================
   SUBMENU HOVER / CURRENT PAGE
========================================================== */

        .primary-menu-container .sub-menu a:hover,
        .primary-menu-container .sub-menu a:focus-visible,
        .primary-menu-container .sub-menu .current-menu-item>a {
            color: #5f2a7d;
            background: linear-gradient(135deg,
                    rgba(95, 42, 125, 0.065),
                    rgba(95, 42, 125, 0.025));
            box-shadow:
                inset 3px 0 0 #5f2a7d,
                0 8px 18px -16px rgba(95, 42, 125, 0.6);
            padding-left: 18px;
            outline: none;
        }


        /* ==========================================================
        KEEP OUR SERVICES CUSTOM SUBMENU UNCHANGED
        ========================================================== */

                /*
        * Prevent the generic WordPress .sub-menu design from
        * interfering with your separately injected premium
        * Our Services menu.
        */
        .primary-menu-container .has-premium-services-menu .premium-services-menu {
            overflow: visible;
        }

        /* ===== PREMIUM SERVICES MENU ===== */

        .premium-services-menu {
            position: absolute;
            top: calc(100% + 18px);
            left: 50%;
            width: 430px;
            padding: 12px;
            border: 1px solid rgba(95, 42, 125, 0.12);
            border-radius: 24px;
            background:
                radial-gradient(circle at top left, rgba(95, 42, 125, 0.07), transparent 32%),
                linear-gradient(145deg, #ffffff 0%, #fbf8fd 100%);
            box-shadow:
                0 32px 80px -28px rgba(48, 20, 65, 0.38),
                0 10px 30px -20px rgba(95, 42, 125, 0.28);
            opacity: 0;
            visibility: hidden;
            pointer-events: none;
            transform: translate(-50%, 10px);
            transition:
                opacity 0.22s ease,
                transform 0.22s ease,
                visibility 0.22s ease;
        }

        .premium-services-menu::before {
            content: "";
            position: absolute;
            left: 0;
            right: 0;
            top: -20px;
            height: 20px;
        }

        .premium-services-menu::after {
            content: "";
            position: absolute;
            top: 0;
            left: 30px;
            right: 30px;
            height: 3px;
            border-radius: 0 0 999px 999px;
            background: linear-gradient(90deg,
                    transparent,
                    #4a2062 15%,
                    #5f2a7d 50%,
                    #7d4a98 85%,
                    transparent);
        }

        .has-premium-services-menu:hover>.premium-services-menu,
        .has-premium-services-menu:focus-within>.premium-services-menu {
            opacity: 1;
            visibility: visible;
            pointer-events: auto;
            transform: translate(-50%, 0);
        }

        .has-premium-services-menu:hover>a::after,
        .has-premium-services-menu:focus-within>a::after {
            transform: rotate(180deg);
        }

        .premium-services-head {
            padding: 15px 16px 14px;
            margin-bottom: 8px;
            border-bottom: 1px solid rgba(95, 42, 125, 0.10);
        }

        .premium-services-head-label {
            display: inline-flex;
            align-items: center;
            gap: 9px;
            color: #5f2a7d;
            font-size: 11px;
            font-weight: 800;
            letter-spacing: 0.20em;
            text-transform: uppercase;
        }

        .premium-services-head-label::before {
            content: "";
            width: 20px;
            height: 2px;
            flex: 0 0 20px;
            border-radius: 999px;
            background: linear-gradient(90deg,
                    #4a2062,
                    #7d4a98);
        }

        .premium-services-list {
            display: flex;
            flex-direction: column;
            gap: 4px;
            padding: 5px;
        }

        .premium-service-link {
            position: relative;
            display: flex;
            align-items: center;
            gap: 12px;
            min-height: 56px;
            padding: 8px 10px;
            border: 1px solid transparent;
            border-radius: 14px;
            color: #334155;
            background: transparent;
            transition:
                color 0.22s ease,
                background 0.22s ease,
                border-color 0.22s ease,
                box-shadow 0.22s ease,
                transform 0.22s ease;
        }

        .premium-service-link:hover,
        .premium-service-link:focus-visible,
        .premium-service-link.is-current {
            color: #5f2a7d;
            border-color: rgba(95, 42, 125, 0.11);
            background: linear-gradient(135deg,
                    rgba(95, 42, 125, 0.06),
                    rgba(95, 42, 125, 0.025));
            box-shadow: 0 10px 25px -20px rgba(95, 42, 125, 0.65);
            outline: none;
            transform: translateX(3px);
        }

        .premium-service-icon {
            display: flex;
            width: 38px;
            height: 38px;
            flex: 0 0 38px;
            align-items: center;
            justify-content: center;
            border: 1px solid rgba(95, 42, 125, 0.10);
            border-radius: 12px;
            background: #f6f0f8;
            color: #5f2a7d;
            font-size: 13px;
            transition:
                color 0.22s ease,
                background 0.22s ease,
                border-color 0.22s ease,
                box-shadow 0.22s ease,
                transform 0.22s ease;
        }

        .premium-service-link:hover .premium-service-icon,
        .premium-service-link:focus-visible .premium-service-icon,
        .premium-service-link.is-current .premium-service-icon {
            color: #ffffff;
            border-color: #5f2a7d;
            background: linear-gradient(135deg,
                    #4a2062,
                    #5f2a7d);
            box-shadow: 0 8px 18px -10px rgba(95, 42, 125, 0.85);
            transform: rotate(-2deg);
        }

        .premium-service-title {
            flex: 1;
            color: inherit;
            font-size: 12px;
            font-weight: 700;
            line-height: 1.4;
        }

        .premium-service-arrow {
            flex: 0 0 auto;
            color: #b49ac3;
            font-size: 9px;
            opacity: 0;
            transform: translateX(-5px);
            transition:
                color 0.22s ease,
                opacity 0.22s ease,
                transform 0.22s ease;
        }

        .premium-service-link:hover .premium-service-arrow,
        .premium-service-link:focus-visible .premium-service-arrow,
        .premium-service-link.is-current .premium-service-arrow {
            color: #5f2a7d;
            opacity: 1;
            transform: translateX(0);
        }

        .premium-services-view-all {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 14px;
            width: 100%;
            margin-top: 10px;
            padding: 12px 16px;
            border: 1px solid rgba(255, 255, 255, 0.10);
            border-radius: 14px;
            background: linear-gradient(135deg,
                    #4a2062 0%,
                    #5f2a7d 55%,
                    #75408f 100%);
            color: #ffffff !important;
            font-size: 11px;
            font-weight: 800;
            letter-spacing: 0.04em;
            box-shadow: 0 14px 28px -16px rgba(95, 42, 125, 0.78);
            transition:
                transform 0.22s ease,
                box-shadow 0.22s ease,
                background 0.22s ease;
        }

        .premium-services-view-all:hover,
        .premium-services-view-all:focus-visible {
            color: #ffffff !important;
            background: linear-gradient(135deg,
                    #3e1955,
                    #4a2062 50%,
                    #5f2a7d);
            box-shadow: 0 18px 32px -16px rgba(95, 42, 125, 0.95);
            transform: translateY(-2px);
            outline: none;
        }

        .premium-services-view-all i {
            width: 28px;
            height: 28px;
            flex: 0 0 28px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.14);
            font-size: 9px;
            transition: transform 0.22s ease;
        }

        .premium-services-view-all:hover i {
            transform: translateX(3px);
        }


        /* ==========================================================
           MOBILE + TABLET NAVIGATION
        ========================================================== */

        #mobile-menu {
            max-height: calc(100vh - 72px);
            overflow-y: auto;
            overscroll-behavior: contain;
        }

        .mobile-primary-menu,
        .mobile-primary-menu ul {
            margin: 0;
            padding: 0;
            list-style: none;
        }

        .mobile-primary-menu>li {
            position: relative;
            border-bottom: 1px solid #eee8f1;
        }

        .mobile-primary-menu>li:last-child {
            border-bottom: 0;
        }

        .mobile-primary-menu>li>a {
            display: flex;
            width: 100%;
            min-height: 56px;
            align-items: center;
            padding: 14px 4px;
            color: #1e293b;
            font-size: 15px;
            font-weight: 700;
            line-height: 1.4;
            transition:
                color 0.22s ease,
                padding-left 0.22s ease;
        }

        .mobile-primary-menu>li>a:hover,
        .mobile-primary-menu>li>a:focus-visible,
        .mobile-primary-menu>.current-menu-item>a,
        .mobile-primary-menu>.current-menu-ancestor>a {
            color: #5f2a7d;
            outline: none;
        }

        /*
         * WordPress native submenu.
         * Hidden by default on mobile/tablet.
         */
        .mobile-primary-menu .sub-menu {
            display: none;
            margin: 0 0 12px;
            padding: 8px;
            border: 1px solid rgba(95, 42, 125, 0.10);
            border-radius: 16px;
            background: #fbf8fd;
        }

        .mobile-primary-menu .sub-menu li+li {
            margin-top: 3px;
        }

        .mobile-primary-menu .sub-menu a {
            display: block;
            padding: 10px 12px;
            border-radius: 10px;
            color: #475569;
            font-size: 13px;
            font-weight: 600;
        }

        .mobile-primary-menu .sub-menu a:hover,
        .mobile-primary-menu .sub-menu a:focus-visible,
        .mobile-primary-menu .sub-menu .current-menu-item>a {
            color: #5f2a7d;
            background: rgba(95, 42, 125, 0.06);
            outline: none;
        }

        /*
         * Parent items with dropdown.
         */
        .mobile-primary-menu .menu-item-has-children {
            position: relative;
        }

        .mobile-primary-menu .menu-item-has-children>a {
            padding-right: 52px;
        }

        .mobile-submenu-toggle {
            position: absolute;
            top: 8px;
            right: 0;
            z-index: 2;
            width: 42px;
            height: 42px;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 1px solid rgba(95, 42, 125, 0.10);
            border-radius: 12px;
            background: #f7f1fa;
            color: #5f2a7d;
            cursor: pointer;
            transition:
                color 0.22s ease,
                background 0.22s ease,
                border-color 0.22s ease,
                transform 0.22s ease;
        }

        .mobile-submenu-toggle:hover,
        .mobile-submenu-toggle:focus-visible {
            color: #ffffff;
            border-color: #5f2a7d;
            background: #5f2a7d;
            outline: none;
        }

        .mobile-submenu-toggle i {
            font-size: 11px;
            transition: transform 0.25s ease;
        }

        .mobile-submenu-toggle.is-open {
            color: #ffffff;
            border-color: #5f2a7d;
            background: #5f2a7d;
        }

        .mobile-submenu-toggle.is-open i {
            transform: rotate(180deg);
        }

        .mobile-primary-menu .menu-item-has-children.mobile-submenu-open>.sub-menu {
            display: block;
        }


        /* ==========================================================
           MOBILE / TABLET PREMIUM SERVICES
        ========================================================== */

        .mobile-services-panel {
            display: none;
            margin: 2px 0 14px;
            padding: 10px;
            border: 1px solid rgba(95, 42, 125, 0.11);
            border-radius: 18px;
            background:
                radial-gradient(circle at top left,
                    rgba(95, 42, 125, 0.06),
                    transparent 38%),
                #ffffff;
            box-shadow:
                0 18px 40px -30px rgba(74, 32, 98, 0.45);
        }

        .mobile-services-panel.is-open {
            display: block;
            animation: mobileServicesReveal 0.24s ease both;
        }

        @keyframes mobileServicesReveal {
            from {
                opacity: 0;
                transform: translateY(-5px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .mobile-services-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 10px 10px 12px;
            margin-bottom: 5px;
            border-bottom: 1px solid rgba(95, 42, 125, 0.09);
        }

        .mobile-services-heading {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            color: #5f2a7d;
            font-size: 10px;
            font-weight: 800;
            letter-spacing: 0.18em;
            text-transform: uppercase;
        }

        .mobile-services-heading::before {
            content: "";
            width: 17px;
            height: 2px;
            border-radius: 999px;
            background: #5f2a7d;
        }

        .mobile-services-list {
            display: flex;
            flex-direction: column;
            gap: 3px;
            padding: 4px 0 0;
        }

        .mobile-service-link {
            display: flex;
            align-items: center;
            gap: 11px;
            width: 100%;
            min-height: 52px;
            padding: 7px 9px;
            border: 1px solid transparent;
            border-radius: 13px;
            color: #334155;
            transition:
                color 0.2s ease,
                background 0.2s ease,
                border-color 0.2s ease,
                transform 0.2s ease;
        }

        .mobile-service-link:hover,
        .mobile-service-link:focus-visible,
        .mobile-service-link.is-current {
            color: #5f2a7d;
            border-color: rgba(95, 42, 125, 0.10);
            background: rgba(95, 42, 125, 0.055);
            outline: none;
            transform: translateX(2px);
        }

        .mobile-service-icon {
            width: 36px;
            height: 36px;
            flex: 0 0 36px;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 1px solid rgba(95, 42, 125, 0.10);
            border-radius: 11px;
            background: #f6f0f8;
            color: #5f2a7d;
            font-size: 12px;
        }

        .mobile-service-link.is-current .mobile-service-icon,
        .mobile-service-link:hover .mobile-service-icon {
            color: #ffffff;
            background: #5f2a7d;
            border-color: #5f2a7d;
        }

        .mobile-service-title {
            flex: 1;
            min-width: 0;
            font-size: 12px;
            font-weight: 700;
            line-height: 1.4;
        }

        .mobile-service-arrow {
            flex: 0 0 auto;
            color: #ad95bb;
            font-size: 9px;
        }

        .mobile-services-view-all {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 12px;
            width: 100%;
            margin-top: 9px;
            padding: 13px 14px;
            border-radius: 13px;
            background: linear-gradient(135deg,
                    #4a2062,
                    #5f2a7d 58%,
                    #75408f);
            color: #ffffff !important;
            font-size: 11px;
            font-weight: 800;
            letter-spacing: 0.04em;
            box-shadow: 0 12px 25px -17px rgba(95, 42, 125, 0.8);
        }

        .mobile-services-view-all:hover,
        .mobile-services-view-all:focus-visible {
            color: #ffffff !important;
            background: #4a2062;
            outline: none;
        }

        .mobile-services-view-all i {
            width: 27px;
            height: 27px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.14);
            font-size: 9px;
        }

        /*
         * Tablet improvements.
         */
        @media (min-width: 768px) and (max-width: 1535px) {
            #mobile-menu .mobile-menu-inner {
                max-width: 760px;
                margin-left: auto;
                margin-right: auto;
            }

            .mobile-services-panel {
                padding: 14px;
                border-radius: 20px;
            }

            .mobile-services-list {
                display: grid;
                grid-template-columns: repeat(2, minmax(0, 1fr));
                gap: 5px 8px;
            }

            .mobile-services-view-all {
                grid-column: 1 / -1;
            }
        }

        /*
         * Small mobile improvements.
         */
        @media (max-width: 479px) {
            .mobile-primary-menu>li>a {
                font-size: 14px;
            }

            .mobile-services-panel {
                padding: 8px;
                border-radius: 16px;
            }

            .mobile-service-link {
                min-height: 49px;
            }

            .mobile-service-icon {
                width: 34px;
                height: 34px;
                flex-basis: 34px;
            }
        }
    </style>

    <?php wp_head(); ?>
</head>

<body <?php body_class('bg-gray-50'); ?>>
    <?php wp_body_open(); ?>

    <div id="page" class="site">

        <header id="masthead">

            <div id="top-header" class="hidden md:block bg-primary text-white text-xs md:text-sm">
                <div class="container mx-auto px-4 md:px-6 flex justify-between items-center py-2">

                    <div class="flex items-center gap-4 md:gap-6">
                        <div class="flex items-center space-x-2 group cursor-pointer">
                            <i class="fa-solid fa-envelope group-hover:opacity-100"></i>
                            <a href="mailto:admin@ozlandcare.com.au" class="text-white font-semibold hover:text-blue transition-colors">
                                admin@ozlandcare.com.au
                            </a>
                        </div>

                        <div class="flex items-center space-x-2 group cursor-pointer">
                            <i class="fa-solid fa-phone group-hover:opacity-100"></i>
                            <a href="tel:1300951223" class="text-white font-semibold hover:text-blue transition-colors">
                                1300 951 223
                            </a>
                        </div>
                    </div>

                    <div class="flex items-center space-x-3">
                        <span class="hidden sm:inline-block text-[11px] text-white uppercase font-semibold tracking-widest">
                            Follow Us
                        </span>

                        <a href="#" aria-label="Facebook" class="w-6 h-6 flex items-center justify-center rounded-full bg-[#1877F2] hover:bg-[#166FE5] transition-all border border-[#1877F2]">
                            <i class="fab fa-facebook-f text-xs font-semibold"></i>
                        </a>

                        <a href="#" aria-label="Instagram" class="w-6 h-6 flex items-center justify-center rounded-full bg-[#E4405F] hover:bg-[#D93250] transition-all border border-[#E4405F]">
                            <i class="fab fa-instagram text-xs font-semibold"></i>
                        </a>
                    </div>

                </div>
            </div>

            <div id="main-header" class="bg-white transition-all duration-300 shadow-sm">
                <div class="container mx-auto px-4 md:px-4">

                    <div class="flex items-center justify-between py-2 lg:py-3 xl:py-4">

                        <div class="flex-shrink-0">
                            <?php if (has_custom_logo()) : ?>

                                <div class="custom-logo-wrapper [&_img]:max-h-10 sm:[&_img]:max-h-14 lg:[&_img]:max-h-20 [&_img]:w-auto hover:scale-105 transition-transform duration-300">
                                    <?php the_custom_logo(); ?>
                                </div>

                            <?php else : ?>

                                <a href="<?php echo esc_url(home_url('/')); ?>"
                                    class="text-2xl font-black text-primary tracking-tighter uppercase">
                                    <?php bloginfo('name'); ?>
                                </a>

                            <?php endif; ?>
                        </div>

                        <!-- We Love NDIS Logo (Premium Badge Style) -->
                        <div class="flex items-center pl-2 sm:pl-6 lg:pl-8 mr-auto 2xl:mr-0">

                            <!-- divider between site logo and NDIS badge -->
                            <span aria-hidden="true"
                                class="block w-px h-8 sm:h-10 lg:h-12 bg-gradient-to-b from-transparent via-primary/30 to-transparent"></span>

                            <div class="relative p-1 ml-2 sm:ml-6 lg:ml-8 hover:ring-primary/60 transition-all duration-300">

                                <!-- soft glow layer -->
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/we-love-ndis-logo.png"
                                    alt="We Love NDIS"
                                    class="relative h-10 sm:h-14 lg:h-16 w-auto animated-float drop-shadow-sm">

                            </div>
                        </div>

                        <nav class="hidden 2xl:flex flex-1 justify-center px-10 primary-menu-container">

                            <?php

                            $services_parent = get_page_by_path('our-services');

                            $service_pages = $services_parent
                                ? get_pages([
                                    'parent'      => $services_parent->ID,
                                    'sort_column' => 'menu_order,post_title',
                                    'sort_order'  => 'ASC',
                                    'post_status' => 'publish',
                                ])
                                : [];


                            /*
                             * Add premium service menu class
                             * to the "Our Services" nav item.
                             */
                            $services_menu_classes = static function ($classes, $menu_item) {

                                if (
                                    0 === strcasecmp(
                                        trim($menu_item->title),
                                        'Our Services'
                                    )
                                ) {
                                    $classes[] = 'has-premium-services-menu';
                                }

                                return $classes;
                            };


                            /*
                             * Inject premium custom desktop services submenu.
                             */
                            $services_menu_content = static function (
                                $item_output,
                                $menu_item,
                                $depth
                            ) use ($service_pages) {

                                if (
                                    0 !== $depth ||
                                    0 !== strcasecmp(
                                        trim($menu_item->title),
                                        'Our Services'
                                    ) ||
                                    empty($service_pages)
                                ) {
                                    return $item_output;
                                }


                                /*
                                 * Show ONLY the first 7 service pages.
                                 */
                                $visible_service_pages = array_slice(
                                    $service_pages,
                                    0,
                                    7
                                );


                                $submenu = '<div class="premium-services-menu">';


                                /*
                                 * Premium submenu heading.
                                 */
                                $submenu .= '<div class="premium-services-head">';

                                $submenu .= '<span class="premium-services-head-label">';
                                $submenu .= 'Our Services';
                                $submenu .= '</span>';

                                $submenu .= '</div>';


                                /*
                                 * Single-column service list.
                                 */
                                $submenu .= '<div class="premium-services-list">';


                                foreach ($visible_service_pages as $service_page) {

                                    $service_title = get_the_title(
                                        $service_page->ID
                                    );

                                    $service_title_lower = strtolower(
                                        $service_title
                                    );

                                    $service_icon =
                                        'fa-solid fa-hand-holding-heart';


                                    if (
                                        false !== strpos(
                                            $service_title_lower,
                                            'travel'
                                        ) ||
                                        false !== strpos(
                                            $service_title_lower,
                                            'driver'
                                        )
                                    ) {

                                        $service_icon =
                                            'fa-solid fa-car-side';
                                    } elseif (
                                        false !== strpos(
                                            $service_title_lower,
                                            'home modification'
                                        )
                                    ) {

                                        $service_icon =
                                            'fa-solid fa-house-circle-check';
                                    } elseif (
                                        false !== strpos(
                                            $service_title_lower,
                                            'household'
                                        )
                                    ) {

                                        $service_icon =
                                            'fa-solid fa-broom';
                                    } elseif (
                                        false !== strpos(
                                            $service_title_lower,
                                            'support coordination'
                                        )
                                    ) {

                                        $service_icon =
                                            'fa-solid fa-compass';
                                    } elseif (
                                        false !== strpos(
                                            $service_title_lower,
                                            'social'
                                        ) ||
                                        false !== strpos(
                                            $service_title_lower,
                                            'community'
                                        ) ||
                                        false !== strpos(
                                            $service_title_lower,
                                            'group'
                                        )
                                    ) {

                                        $service_icon =
                                            'fa-solid fa-user-group';
                                    } elseif (
                                        false !== strpos(
                                            $service_title_lower,
                                            'independent living'
                                        )
                                    ) {

                                        $service_icon =
                                            'fa-solid fa-house-user';
                                    } elseif (
                                        false !== strpos(
                                            $service_title_lower,
                                            'life skill'
                                        ) ||
                                        false !== strpos(
                                            $service_title_lower,
                                            'daily living'
                                        ) ||
                                        false !== strpos(
                                            $service_title_lower,
                                            'life stage'
                                        )
                                    ) {

                                        $service_icon =
                                            'fa-solid fa-seedling';
                                    }


                                    $current_class =
                                        is_page($service_page->ID)
                                        ? ' is-current'
                                        : '';


                                    $submenu .= '<a href="' .
                                        esc_url(
                                            get_permalink(
                                                $service_page->ID
                                            )
                                        ) .
                                        '" class="premium-service-link' .
                                        $current_class .
                                        '">';


                                    $submenu .= '<span class="premium-service-icon">';

                                    $submenu .= '<i class="' .
                                        esc_attr($service_icon) .
                                        '" aria-hidden="true"></i>';

                                    $submenu .= '</span>';


                                    $submenu .= '<span class="premium-service-title">';

                                    $submenu .= esc_html(
                                        $service_title
                                    );

                                    $submenu .= '</span>';


                                    $submenu .= '<span class="premium-service-arrow">';

                                    $submenu .= '<i class="fa-solid fa-chevron-right" aria-hidden="true"></i>';

                                    $submenu .= '</span>';


                                    $submenu .= '</a>';
                                }


                                /*
                                 * View All Services.
                                 */
                                $submenu .= '<a href="' .
                                    esc_url(
                                        home_url('/our-services/')
                                    ) .
                                    '" class="premium-services-view-all">';

                                $submenu .= '<span>';
                                $submenu .= 'View All Services';
                                $submenu .= '</span>';

                                $submenu .= '<i class="fa-solid fa-arrow-right" aria-hidden="true"></i>';

                                $submenu .= '</a>';


                                $submenu .= '</div>';
                                $submenu .= '</div>';


                                return $item_output . $submenu;
                            };


                            add_filter(
                                'nav_menu_css_class',
                                $services_menu_classes,
                                10,
                                2
                            );

                            add_filter(
                                'walker_nav_menu_start_el',
                                $services_menu_content,
                                10,
                                3
                            );


                            wp_nav_menu([
                                'theme_location' => 'primary_menu',
                                'container'      => false,
                                'menu_class'     => 'text-slate-950',
                                'fallback_cb'    => false,
                            ]);


                            remove_filter(
                                'nav_menu_css_class',
                                $services_menu_classes,
                                10
                            );

                            remove_filter(
                                'walker_nav_menu_start_el',
                                $services_menu_content,
                                10
                            );

                            ?>

                        </nav>

                        <div class="hidden 2xl:flex">
                            <a href="<?php echo esc_url(home_url('/contact')); ?>"
                                class="bg-primary hover:bg-blue text-white px-8 py-3.5 rounded-3xl text-[11px] font-black uppercase tracking-widest transition-all shadow-lg active:scale-95">
                                Get in Touch
                            </a>
                        </div>

                        <div class="2xl:hidden">
                            <button
                                id="mobile-menu-button"
                                type="button"
                                aria-expanded="false"
                                aria-controls="mobile-menu"
                                class="text-gray-800 hover:text-primary transition-colors p-2">

                                <i
                                    id="menu-open"
                                    class="fa-solid fa-bars-staggered text-2xl">
                                </i>

                                <i
                                    id="menu-close"
                                    class="hidden fa-solid fa-xmark text-2xl">
                                </i>

                            </button>
                        </div>

                    </div>
                </div>


                <!-- ==================================================
                     MOBILE + TABLET MENU
                =================================================== -->
                <div
                    id="mobile-menu"
                    class="hidden 2xl:hidden bg-white border-t border-gray-100 shadow-2xl">

                    <div class="mobile-menu-inner px-5 sm:px-6 md:px-8 py-6 md:py-8">

                        <?php

                        /*
                         * Add a special class to Our Services
                         * inside the mobile menu.
                         */
                        $mobile_services_class = static function ($classes, $menu_item) {

                            if (
                                0 === strcasecmp(
                                    trim($menu_item->title),
                                    'Our Services'
                                )
                            ) {
                                $classes[] = 'mobile-services-parent';
                            }

                            return $classes;
                        };


                        /*
                         * We hide the WordPress-generated submenu specifically
                         * for Our Services and inject the custom premium panel
                         * afterwards with JS/PHP data.
                         */
                        add_filter(
                            'nav_menu_css_class',
                            $mobile_services_class,
                            10,
                            2
                        );


                        wp_nav_menu([
                            'theme_location' => 'primary_menu',
                            'container'      => false,
                            'menu_class'     => 'mobile-primary-menu',
                            'fallback_cb'    => false,
                        ]);


                        remove_filter(
                            'nav_menu_css_class',
                            $mobile_services_class,
                            10
                        );

                        ?>


                        <?php
                        /*
                         * Prepare the same first 7 services for mobile/tablet.
                         */
                        $mobile_service_pages = array_slice(
                            $service_pages,
                            0,
                            7
                        );
                        ?>


                        <?php if (!empty($mobile_service_pages)) : ?>

                            <div
                                id="mobile-services-template"
                                class="hidden"
                                aria-hidden="true">

                                <div class="mobile-services-panel">

                                    <div class="mobile-services-header">
                                        <span class="mobile-services-heading">
                                            Our Services
                                        </span>
                                    </div>

                                    <div class="mobile-services-list">

                                        <?php foreach ($mobile_service_pages as $service_page) : ?>

                                            <?php

                                            $service_title = get_the_title(
                                                $service_page->ID
                                            );

                                            $service_title_lower = strtolower(
                                                $service_title
                                            );

                                            $service_icon =
                                                'fa-solid fa-hand-holding-heart';


                                            if (
                                                false !== strpos(
                                                    $service_title_lower,
                                                    'travel'
                                                ) ||
                                                false !== strpos(
                                                    $service_title_lower,
                                                    'driver'
                                                )
                                            ) {

                                                $service_icon =
                                                    'fa-solid fa-car-side';
                                            } elseif (
                                                false !== strpos(
                                                    $service_title_lower,
                                                    'home modification'
                                                )
                                            ) {

                                                $service_icon =
                                                    'fa-solid fa-house-circle-check';
                                            } elseif (
                                                false !== strpos(
                                                    $service_title_lower,
                                                    'household'
                                                )
                                            ) {

                                                $service_icon =
                                                    'fa-solid fa-broom';
                                            } elseif (
                                                false !== strpos(
                                                    $service_title_lower,
                                                    'support coordination'
                                                )
                                            ) {

                                                $service_icon =
                                                    'fa-solid fa-compass';
                                            } elseif (
                                                false !== strpos(
                                                    $service_title_lower,
                                                    'social'
                                                ) ||
                                                false !== strpos(
                                                    $service_title_lower,
                                                    'community'
                                                ) ||
                                                false !== strpos(
                                                    $service_title_lower,
                                                    'group'
                                                )
                                            ) {

                                                $service_icon =
                                                    'fa-solid fa-user-group';
                                            } elseif (
                                                false !== strpos(
                                                    $service_title_lower,
                                                    'independent living'
                                                )
                                            ) {

                                                $service_icon =
                                                    'fa-solid fa-house-user';
                                            } elseif (
                                                false !== strpos(
                                                    $service_title_lower,
                                                    'life skill'
                                                ) ||
                                                false !== strpos(
                                                    $service_title_lower,
                                                    'daily living'
                                                ) ||
                                                false !== strpos(
                                                    $service_title_lower,
                                                    'life stage'
                                                )
                                            ) {

                                                $service_icon =
                                                    'fa-solid fa-seedling';
                                            }


                                            $mobile_current_class =
                                                is_page($service_page->ID)
                                                ? ' is-current'
                                                : '';

                                            ?>

                                            <a
                                                href="<?php echo esc_url(get_permalink($service_page->ID)); ?>"
                                                class="mobile-service-link<?php echo esc_attr($mobile_current_class); ?>">

                                                <span class="mobile-service-icon">
                                                    <i
                                                        class="<?php echo esc_attr($service_icon); ?>"
                                                        aria-hidden="true">
                                                    </i>
                                                </span>

                                                <span class="mobile-service-title">
                                                    <?php echo esc_html($service_title); ?>
                                                </span>

                                                <span class="mobile-service-arrow">
                                                    <i
                                                        class="fa-solid fa-chevron-right"
                                                        aria-hidden="true">
                                                    </i>
                                                </span>

                                            </a>

                                        <?php endforeach; ?>


                                        <a
                                            href="<?php echo esc_url(home_url('/our-services/')); ?>"
                                            class="mobile-services-view-all">

                                            <span>
                                                View All Services
                                            </span>

                                            <i
                                                class="fa-solid fa-arrow-right"
                                                aria-hidden="true">
                                            </i>

                                        </a>

                                    </div>

                                </div>

                            </div>

                        <?php endif; ?>


                        <a
                            href="<?php echo esc_url(home_url('/contact')); ?>"
                            class="block mt-6 text-center bg-primary text-white py-4 rounded-xl font-bold uppercase tracking-widest text-sm shadow-lg">
                            Get in Touch
                        </a>

                    </div>
                </div>

            </div>

        </header>


        <div id="content-anchor">

            <?php

            if (is_front_page() || is_home()) {

                get_template_part(
                    'template-parts/content',
                    'slider'
                );
            } else {

                get_template_part(
                    'template-parts/content',
                    'banner'
                );
            }

            ?>

        </div>

    </div>


    <script>
        document.addEventListener('DOMContentLoaded', function() {

            const header =
                document.getElementById('masthead');

            const body =
                document.body;

            const mainHeader =
                document.getElementById('main-header');


            function adjustPadding() {

                body.style.paddingTop =
                    header.offsetHeight + 'px';

            }


            adjustPadding();


            window.addEventListener(
                'resize',
                adjustPadding
            );


            window.addEventListener('scroll', function() {

                const currentScroll =
                    window.pageYOffset ||
                    document.documentElement.scrollTop;


                if (currentScroll > 50) {

                    body.classList.add(
                        'hide-top'
                    );

                    mainHeader.classList.add(
                        'shadow-lg'
                    );

                } else {

                    body.classList.remove(
                        'hide-top'
                    );

                    mainHeader.classList.remove(
                        'shadow-lg'
                    );

                }

            });


            /* ==========================================
               MAIN MOBILE MENU
            ========================================== */

            const btn =
                document.getElementById(
                    'mobile-menu-button'
                );

            const menu =
                document.getElementById(
                    'mobile-menu'
                );

            const menuOpenIcon =
                document.getElementById(
                    'menu-open'
                );

            const menuCloseIcon =
                document.getElementById(
                    'menu-close'
                );


            if (btn && menu) {

                btn.addEventListener('click', function() {

                    const isOpening =
                        menu.classList.contains('hidden');

                    menu.classList.toggle('hidden');

                    menuOpenIcon.classList.toggle('hidden');

                    menuCloseIcon.classList.toggle('hidden');

                    btn.setAttribute(
                        'aria-expanded',
                        isOpening ? 'true' : 'false'
                    );


                    /*
                     * Recalculate fixed header offset.
                     */
                    setTimeout(
                        adjustPadding,
                        20
                    );

                });

            }


            /* ==========================================
               GENERIC MOBILE/TABLET SUBMENUS
            ========================================== */

            const mobileMenu =
                document.querySelector(
                    '.mobile-primary-menu'
                );


            if (mobileMenu) {

                const parentItems =
                    mobileMenu.querySelectorAll(
                        '.menu-item-has-children'
                    );


                parentItems.forEach(function(parentItem) {

                    const parentLink =
                        parentItem.querySelector(
                            ':scope > a'
                        );

                    const submenu =
                        parentItem.querySelector(
                            ':scope > .sub-menu'
                        );


                    if (!parentLink || !submenu) {
                        return;
                    }


                    /*
                     * Our Services receives the custom
                     * premium panel instead.
                     */
                    if (
                        parentItem.classList.contains(
                            'mobile-services-parent'
                        )
                    ) {
                        submenu.style.display = 'none';
                        return;
                    }


                    const toggle =
                        document.createElement(
                            'button'
                        );

                    toggle.type =
                        'button';

                    toggle.className =
                        'mobile-submenu-toggle';

                    toggle.setAttribute(
                        'aria-expanded',
                        'false'
                    );

                    toggle.setAttribute(
                        'aria-label',
                        'Toggle submenu'
                    );

                    toggle.innerHTML =
                        '<i class="fa-solid fa-chevron-down" aria-hidden="true"></i>';


                    parentItem.appendChild(
                        toggle
                    );


                    toggle.addEventListener(
                        'click',
                        function(event) {

                            event.preventDefault();

                            event.stopPropagation();


                            const isOpen =
                                parentItem.classList.toggle(
                                    'mobile-submenu-open'
                                );


                            toggle.classList.toggle(
                                'is-open',
                                isOpen
                            );


                            toggle.setAttribute(
                                'aria-expanded',
                                isOpen ? 'true' : 'false'
                            );

                        }
                    );

                });

            }


            /* ==========================================
               PREMIUM MOBILE SERVICES ACCORDION
            ========================================== */

            const mobileServicesParent =
                document.querySelector(
                    '.mobile-primary-menu .mobile-services-parent'
                );

            const servicesTemplate =
                document.getElementById(
                    'mobile-services-template'
                );


            if (
                mobileServicesParent &&
                servicesTemplate
            ) {

                const servicesParentLink =
                    mobileServicesParent.querySelector(
                        ':scope > a'
                    );

                const normalSubmenu =
                    mobileServicesParent.querySelector(
                        ':scope > .sub-menu'
                    );


                /*
                 * Remove the standard WordPress submenu
                 * visually because premium services panel
                 * replaces it.
                 */
                if (normalSubmenu) {

                    normalSubmenu.style.display =
                        'none';

                }


                const servicesToggle =
                    document.createElement(
                        'button'
                    );


                servicesToggle.type =
                    'button';

                servicesToggle.className =
                    'mobile-submenu-toggle mobile-services-toggle';

                servicesToggle.setAttribute(
                    'aria-expanded',
                    'false'
                );

                servicesToggle.setAttribute(
                    'aria-label',
                    'Toggle Our Services'
                );

                servicesToggle.innerHTML =
                    '<i class="fa-solid fa-chevron-down" aria-hidden="true"></i>';


                mobileServicesParent.appendChild(
                    servicesToggle
                );


                /*
                 * Clone premium services markup
                 * beneath the Our Services item.
                 */
                const premiumPanel =
                    servicesTemplate
                    .querySelector(
                        '.mobile-services-panel'
                    )
                    .cloneNode(true);


                mobileServicesParent.appendChild(
                    premiumPanel
                );


                /*
                 * Toggle function.
                 */
                function toggleServicesMenu() {

                    const isOpen =
                        premiumPanel.classList.toggle(
                            'is-open'
                        );


                    servicesToggle.classList.toggle(
                        'is-open',
                        isOpen
                    );


                    servicesToggle.setAttribute(
                        'aria-expanded',
                        isOpen ? 'true' : 'false'
                    );

                }


                /*
                 * Arrow button opens submenu.
                 */
                servicesToggle.addEventListener(
                    'click',
                    function(event) {

                        event.preventDefault();

                        event.stopPropagation();

                        toggleServicesMenu();

                    }
                );


                /*
                 * On mobile/tablet, clicking the
                 * Our Services text also opens it.
                 */
                if (servicesParentLink) {

                    servicesParentLink.addEventListener(
                        'click',
                        function(event) {

                            if (
                                window.innerWidth < 1536
                            ) {

                                event.preventDefault();

                                toggleServicesMenu();

                            }

                        }
                    );

                }

            }


            /* ==========================================
               RESET MENU WHEN RETURNING TO DESKTOP
            ========================================== */

            window.addEventListener(
                'resize',
                function() {

                    if (
                        window.innerWidth >= 1536 &&
                        menu
                    ) {

                        menu.classList.add(
                            'hidden'
                        );

                        if (menuOpenIcon) {
                            menuOpenIcon.classList.remove(
                                'hidden'
                            );
                        }

                        if (menuCloseIcon) {
                            menuCloseIcon.classList.add(
                                'hidden'
                            );
                        }

                        if (btn) {
                            btn.setAttribute(
                                'aria-expanded',
                                'false'
                            );
                        }

                    }

                    adjustPadding();

                }
            );

        });
    </script>

    <?php wp_footer(); ?>

</body>

</html>
