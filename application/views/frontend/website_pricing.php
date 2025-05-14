<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PTR-Niger - Nos Offres Premium</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: {
                            50: '#f0f9ff',
                            100: '#e0f2fe',
                            200: '#bae6fd',
                            300: '#7dd3fc',
                            400: '#38bdf8',
                            500: '#0ea5e9',
                            600: '#0284c7',
                            700: '#0369a1',
                            800: '#075985',
                            900: '#0c4a6e',
                        },
                        secondary: {
                            50: '#f5f3ff',
                            100: '#ede9fe',
                            200: '#ddd6fe',
                            300: '#c4b5fd',
                            400: '#a78bfa',
                            500: '#8b5cf6',
                            600: '#7c3aed',
                            700: '#6d28d9',
                            800: '#5b21b6',
                            900: '#4c1d95',
                        },
                        accent: {
                            50: '#fef2f2',
                            100: '#fee2e2',
                            200: '#fecaca',
                            300: '#fca5a5',
                            400: '#f87171',
                            500: '#ef4444',
                            600: '#dc2626',
                            700: '#b91c1c',
                            800: '#991b1b',
                            900: '#7f1d1d',
                        }
                    },
                    animation: {
                        'float': 'float 6s ease-in-out infinite',
                        'pulse-slow': 'pulse 5s cubic-bezier(0.4, 0, 0.6, 1) infinite',
                        'bounce-slow': 'bounce 3s infinite',
                        'wave': 'wave 15s ease-in-out infinite',
                        'spin-slow': 'spin 15s linear infinite',
                        'slide': 'slide 25s linear infinite',
                        'color-shift': 'color-shift 20s ease infinite'
                    },
                    keyframes: {
                        float: {
                            '0%, 100%': { transform: 'translateY(0)' },
                            '50%': { transform: 'translateY(-10px)' },
                        },
                        wave: {
                            '0%': { transform: 'translateX(0) translateY(0) rotate(0)' },
                            '33%': { transform: 'translateX(70px) translateY(-20px) rotate(8deg)' },
                            '66%': { transform: 'translateX(-40px) translateY(15px) rotate(-5deg)' },
                            '100%': { transform: 'translateX(0) translateY(0) rotate(0)' },
                        },
                        slide: {
                            '0%': { backgroundPosition: '0% 50%' },
                            '50%': { backgroundPosition: '100% 50%' },
                            '100%': { backgroundPosition: '0% 50%' }
                        },
                        'color-shift': {
                            '0%': { filter: 'hue-rotate(0deg)' },
                            '50%': { filter: 'hue-rotate(40deg)' },
                            '100%': { filter: 'hue-rotate(0deg)' }
                        }
                    }
                }
            }
        }
    </script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap');
        
        body {
            font-family: 'Montserrat', sans-serif;
            background: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 100%);
            position: relative;
            overflow-x: hidden;
        }
        
        /* Animated Background */
        .animated-bg {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            z-index: -20;
        }
        
        .animated-bg::before {
            content: '';
            position: absolute;
            width: 200%;
            height: 200%;
            top: -50%;
            left: -50%;
            background: radial-gradient(circle at center, rgba(14, 165, 233, 0.01) 0%, rgba(139, 92, 246, 0.01) 25%, rgba(236, 72, 153, 0.01) 50%, rgba(14, 165, 233, 0.01) 75%, rgba(139, 92, 246, 0.01) 100%);
            animation: spin-slow 40s linear infinite;
            z-index: -15;
        }
        
        .animated-bg::after {
            content: '';
            position: absolute;
            width: 100%;
            height: 100%;
            background-image: 
                linear-gradient(120deg, rgba(14, 165, 233, 0.03) 0%, rgba(139, 92, 246, 0.03) 100%);
            background-size: 400% 400%;
            animation: slide 25s ease infinite;
            z-index: -10;
        }
        
        .wave {
            position: absolute;
            width: 100%;
            height: 800px;
            background: linear-gradient(90deg, 
                rgba(14, 165, 233, 0.03), 
                rgba(139, 92, 246, 0.03), 
                rgba(236, 72, 153, 0.03), 
                rgba(14, 165, 233, 0.03));
            opacity: 0.4;
            border-radius: 43%;
            animation: wave 15s ease-in-out infinite;
        }
        
        .wave:nth-child(1) {
            top: 10%;
            left: -50%;
            animation-delay: 0s;
        }
        
        .wave:nth-child(2) {
            top: 20%;
            left: -60%;
            opacity: 0.3;
            animation-delay: -3s;
            animation-duration: 18s;
            transform: rotate(20deg);
        }
        
        .wave:nth-child(3) {
            top: 50%;
            left: -40%;
            opacity: 0.2;
            animation-delay: -6s;
            animation-duration: 20s;
            transform: rotate(-15deg);
        }
        
        .blur-circle {
            position: absolute;
            border-radius: 50%;
            filter: blur(60px);
            opacity: 0.15;
            animation: color-shift 20s ease infinite;
        }
        
        .card-hover {
            transition: all 0.5s cubic-bezier(0.25, 0.8, 0.25, 1);
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
        
        .card-hover:hover {
            transform: translateY(-15px) scale(1.02);
            box-shadow: 0 20px 40px -10px rgba(0, 0, 0, 0.15);
            border-color: rgba(255, 255, 255, 0.4);
        }
        
        .feature-icon {
            transition: all 0.3s ease;
        }
        
        .card-hover:hover .feature-icon {
            transform: scale(1.1);
            color: #0ea5e9;
        }
        
        .form-input {
            transition: all 0.3s ease;
            background: rgba(255, 255, 255, 0.8);
        }
        
        .form-input:focus {
            box-shadow: 0 0 0 3px rgba(14, 165, 233, 0.3);
            background: white;
        }
        
        .btn-primary {
            background: linear-gradient(135deg, #0ea5e9 0%, #0369a1 100%);
            transition: all 0.3s ease;
        }
        
        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 20px -5px rgba(14, 165, 233, 0.4);
        }
        
        .btn-secondary {
            background: linear-gradient(135deg, #8b5cf6 0%, #6d28d9 100%);
            transition: all 0.3s ease;
        }
        
        .btn-secondary:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 20px -5px rgba(139, 92, 246, 0.4);
        }
        
        .modal-enter {
            animation: modalEnter 0.4s ease-out forwards;
        }
        
        @keyframes modalEnter {
            0% {
                opacity: 0;
                transform: translateY(20px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        @keyframes spin-slow {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
        
        .bg-pattern {
            background-image: radial-gradient(rgba(14, 165, 233, 0.1) 1px, transparent 1px);
            background-size: 20px 20px;
        }
    </style>
</head>
<body class="text-gray-800">
    <!-- Animated Background -->
    <div class="animated-bg">
        <div class="wave"></div>
        <div class="wave"></div>
        <div class="wave"></div>
        
        <div class="blur-circle" style="width: 500px; height: 500px; background: rgba(14, 165, 233, 0.5); top: 10%; right: -5%;"></div>
        <div class="blur-circle" style="width: 600px; height: 600px; background: rgba(139, 92, 246, 0.5); bottom: -10%; left: -10%;"></div>
        <div class="blur-circle" style="width: 400px; height: 400px; background: rgba(236, 72, 153, 0.5); top: 40%; left: 30%;"></div>
    </div>

    <div class="container mx-auto px-4 py-12 max-w-7xl relative z-10">
        <!-- Animated Background Elements -->
        <div class="fixed top-0 left-0 w-full h-full overflow-hidden -z-10">
            <div class="absolute top-20 left-10 w-16 h-16 rounded-full bg-primary-200 opacity-20 animate-float animation-delay-100"></div>
            <div class="absolute top-1/3 right-20 w-24 h-24 rounded-full bg-secondary-200 opacity-20 animate-float animation-delay-300"></div>
            <div class="absolute bottom-1/4 left-1/4 w-20 h-20 rounded-full bg-accent-200 opacity-20 animate-float animation-delay-500"></div>
            
            <div class="absolute top-1/4 right-1/4 w-32 h-32 rounded-full bg-primary-300 opacity-10 animate-pulse-slow"></div>
            <div class="absolute bottom-1/3 right-1/3 w-28 h-28 rounded-full bg-secondary-300 opacity-10 animate-pulse-slow animation-delay-1000"></div>
            <div class="absolute top-2/3 left-1/3 w-36 h-36 rounded-full bg-accent-300 opacity-10 animate-pulse-slow animation-delay-2000"></div>
            
            <div class="absolute top-40 left-1/2 w-48 h-48 rounded-full bg-gradient-to-br from-primary-300 to-secondary-300 opacity-10 animate-wave"></div>
            <div class="absolute bottom-60 right-1/3 w-48 h-48 rounded-full bg-gradient-to-br from-secondary-300 to-accent-300 opacity-10 animate-wave animation-delay-2000"></div>
        </div>

        <!-- Header -->
        <div class="text-center mb-20">
            <div class="inline-block mb-6">
                <div class="bg-gradient-to-r from-primary-500 to-secondary-500 text-white p-3 rounded-xl shadow-lg transform rotate-3">
                    <h1 class="text-4xl font-bold tracking-tight">PTR-Niger</h1>
                </div>
            </div>
            <h2 class="text-3xl font-semibold text-gray-800 mb-4">Solutions Digitales sur Mesure</h2>
            <div class="max-w-2xl mx-auto">
                <p class="text-lg text-gray-600 mb-6">
                    Transformez votre présence en ligne avec nos solutions haut de gamme adaptées à chaque besoin.
                </p>
                <div class="h-1 w-24 bg-gradient-to-r from-primary-500 to-secondary-500 mx-auto rounded-full"></div>
            </div>
        </div>

        <!-- Pricing Cards -->
        <div class="grid md:grid-cols-3 gap-8 mb-24">
            <!-- Basic Card -->
            <div class="card-hover rounded-2xl overflow-hidden shadow-xl relative">
                <div class="absolute inset-0 bg-gradient-to-br from-white to-primary-50 opacity-80"></div>
                <div class="relative px-8 py-10">
                    <div class="flex items-center justify-between mb-6">
                        <h3 class="text-2xl font-bold text-gray-800">Basic</h3>
                        <span class="bg-primary-100 text-primary-800 text-xs font-semibold px-3 py-1 rounded-full">ENTRÉE DE GAMME</span>
                    </div>
                    <div class="mb-8">
                        <span class="text-5xl font-bold text-gray-900">50 000</span>
                        <span class="text-2xl font-medium text-gray-600">CFA</span>
                        <span class="block text-sm text-gray-500 mt-1">par site</span>
                    </div>
                    <ul class="space-y-4 mb-10">
                        <li class="flex items-start">
                            <div class="feature-icon text-primary-500 mr-3 mt-1">
                                <i class="fas fa-check-circle"></i>
                            </div>
                            <span class="text-gray-700">Site vitrine simple (5 pages max)</span>
                        </li>
                        <li class="flex items-start">
                            <div class="feature-icon text-primary-500 mr-3 mt-1">
                                <i class="fas fa-check-circle"></i>
                            </div>
                            <span class="text-gray-700">Design responsive moderne</span>
                        </li>
                        <li class="flex items-start">
                            <div class="feature-icon text-primary-500 mr-3 mt-1">
                                <i class="fas fa-check-circle"></i>
                            </div>
                            <span class="text-gray-700">Formulaire de contact</span>
                        </li>
                        <li class="flex items-start">
                            <div class="feature-icon text-primary-500 mr-3 mt-1">
                                <i class="fas fa-check-circle"></i>
                            </div>
                            <span class="text-gray-700">Sous-domaine PTR Niger offert</span>
                        </li>
                        <li class="flex items-start">
                            <div class="feature-icon text-primary-500 mr-3 mt-1">
                                <i class="fas fa-check-circle"></i>
                            </div>
                            <span class="text-gray-700">Hébergement gratuit 1 an</span>
                        </li>
                        <li class="flex items-start text-gray-400">
                            <div class="mr-3 mt-1">
                                <i class="fas fa-times-circle"></i>
                            </div>
                            <span>E-commerce</span>
                        </li>
                    </ul>
                    <button class="w-full btn-primary text-white font-semibold py-3 px-6 rounded-xl" onclick="selectPackage('Basic')">
                        Commencer <i class="fas fa-arrow-right ml-2"></i>
                    </button>
                </div>
            </div>

            <!-- Medium Card (Featured) -->
            <div class="card-hover rounded-2xl overflow-hidden shadow-2xl relative transform scale-105 z-10 border-2 border-primary-300">
                <div class="absolute inset-0 bg-gradient-to-br from-white to-secondary-50 opacity-80"></div>
                <div class="relative px-8 py-10">
                    <div class="absolute top-0 right-0 bg-primary-600 text-white text-xs font-bold px-4 py-1 rounded-bl-lg">
                        POPULAIRE
                    </div>
                    <div class="flex items-center justify-between mb-6">
                        <h3 class="text-2xl font-bold text-gray-800">Medium</h3>
                        <span class="bg-secondary-100 text-secondary-800 text-xs font-semibold px-3 py-1 rounded-full">VALEUR SÛRE</span>
                    </div>
                    <div class="mb-8">
                        <span class="text-5xl font-bold text-gray-900">150 000</span>
                        <span class="text-2xl font-medium text-gray-600">CFA</span>
                        <span class="block text-sm text-gray-500 mt-1">par site</span>
                    </div>
                    <ul class="space-y-4 mb-10">
                        <li class="flex items-start">
                            <div class="feature-icon text-secondary-500 mr-3 mt-1">
                                <i class="fas fa-check-circle"></i>
                            </div>
                            <span class="text-gray-700">Site vitrine avancé (15 pages)</span>
                        </li>
                        <li class="flex items-start">
                            <div class="feature-icon text-secondary-500 mr-3 mt-1">
                                <i class="fas fa-check-circle"></i>
                            </div>
                            <span class="text-gray-700">Design personnalisé unique</span>
                        </li>
                        <li class="flex items-start">
                            <div class="feature-icon text-secondary-500 mr-3 mt-1">
                                <i class="fas fa-check-circle"></i>
                            </div>
                            <span class="text-gray-700">Galerie média intégrée</span>
                        </li>
                        <li class="flex items-start">
                            <div class="feature-icon text-secondary-500 mr-3 mt-1">
                                <i class="fas fa-check-circle"></i>
                            </div>
                            <span class="text-gray-700">Système de blog</span>
                        </li>
                        <li class="flex items-start">
                            <div class="feature-icon text-secondary-500 mr-3 mt-1">
                                <i class="fas fa-check-circle"></i>
                            </div>
                            <span class="text-gray-700">Domaine personnalisé inclus</span>
                        </li>
                        <li class="flex items-start">
                            <div class="feature-icon text-secondary-500 mr-3 mt-1">
                                <i class="fas fa-check-circle"></i>
                            </div>
                            <span class="text-gray-700">Hébergement gratuit 2 ans</span>
                        </li>
                        <li class="flex items-start">
                            <div class="feature-icon text-secondary-500 mr-3 mt-1">
                                <i class="fas fa-check-circle"></i>
                            </div>
                            <span class="text-gray-700">Certificat SSL gratuit (HTTPS)</span>
                        </li>
                        <li class="flex items-start">
                            <div class="feature-icon text-secondary-500 mr-3 mt-1">
                                <i class="fas fa-check-circle"></i>
                            </div>
                            <span class="text-gray-700">Formulaire de contact avancé</span>
                        </li>
                        <li class="flex items-start">
                            <div class="feature-icon text-secondary-500 mr-3 mt-1">
                                <i class="fas fa-check-circle"></i>
                            </div>
                            <span class="text-gray-700">Optimisation SEO de base</span>
                        </li>
                        <li class="flex items-start">
                            <div class="feature-icon text-secondary-500 mr-3 mt-1">
                                <i class="fas fa-check-circle"></i>
                            </div>
                            <span class="text-gray-700">Mises à jour de contenu (jusqu'à 3 modifications)</span>
                        </li>
                        <li class="flex items-start">
                            <div class="feature-icon text-secondary-500 mr-3 mt-1">
                                <i class="fas fa-check-circle"></i>
                            </div>
                            <span class="text-gray-700">Intégration réseaux sociaux</span>
                        </li>
                        <li class="flex items-start">
                            <div class="feature-icon text-secondary-500 mr-3 mt-1">
                                <i class="fas fa-check-circle"></i>
                            </div>
                            <span class="text-gray-700">Galerie/photos à défilement infini</span>
                        </li>
                        <li class="flex items-start">
                            <div class="feature-icon text-secondary-500 mr-3 mt-1">
                                <i class="fas fa-check-circle"></i>
                            </div>
                            <span class="text-gray-700">Module FAQ et témoignages clients</span>
                        </li>
                        <li class="flex items-start">
                            <div class="feature-icon text-secondary-500 mr-3 mt-1">
                                <i class="fas fa-check-circle"></i>
                            </div>
                            <span class="text-gray-700">Optimisation mobile & tablette</span>
                        </li>
                        <li class="flex items-start">
                            <div class="feature-icon text-secondary-500 mr-3 mt-1">
                                <i class="fas fa-check-circle"></i>
                            </div>
                            <span class="text-gray-700">Maintenance corrective (bugs mineurs)</span>
                        </li>
                        <li class="flex items-start text-gray-400">
                            <div class="mr-3 mt-1">
                                <i class="fas fa-times-circle"></i>
                            </div>
                            <span>E-commerce</span>
                        </li>
                    </ul>
                    <button class="w-full btn-secondary text-white font-semibold py-3 px-6 rounded-xl" onclick="selectPackage('Medium')">
                        Choisir cette offre <i class="fas fa-star ml-2"></i>
                    </button>
                </div>
            </div>

            <!-- Premium Card -->
            <div class="card-hover rounded-2xl overflow-hidden shadow-xl relative">
                <div class="absolute inset-0 bg-gradient-to-br from-white to-accent-50 opacity-80"></div>
                <div class="relative px-8 py-10">
                    <div class="flex items-center justify-between mb-6">
                        <h3 class="text-2xl font-bold text-gray-800">Premium</h3>
                        <span class="bg-accent-100 text-accent-800 text-xs font-semibold px-3 py-1 rounded-full">HAUT DE GAMME</span>
                    </div>
                    <div class="mb-8">
                        <span class="text-5xl font-bold text-gray-900">500 000</span>
                        <span class="text-2xl font-medium text-gray-600">CFA</span>
                        <span class="block text-sm text-gray-500 mt-1">par site</span>
                    </div>
                    <ul class="space-y-4 mb-10  pr-2">
                        <li class="flex items-start">
                            <div class="feature-icon text-accent-500 mr-3 mt-1">
                                <i class="fas fa-check-circle"></i>
                            </div>
                            <span class="text-gray-700">Site e-commerce complet (illimité produits)</span>
                        </li>
                        <li class="flex items-start">
                            <div class="feature-icon text-accent-500 mr-3 mt-1">
                                <i class="fas fa-check-circle"></i>
                            </div>
                            <span class="text-gray-700">Paiements en ligne sécurisés</span>
                        </li>
                        <li class="flex items-start">
                            <div class="feature-icon text-accent-500 mr-3 mt-1">
                                <i class="fas fa-check-circle"></i>
                            </div>
                            <span class="text-gray-700">Gestion des stocks & alertes</span>
                        </li>
                        <li class="flex items-start">
                            <div class="feature-icon text-accent-500 mr-3 mt-1">
                                <i class="fas fa-check-circle"></i>
                            </div>
                            <span class="text-gray-700">Analyse des performances & rapports avancés</span>
                        </li>
                        <li class="flex items-start">
                            <div class="feature-icon text-accent-500 mr-3 mt-1">
                                <i class="fas fa-check-circle"></i>
                            </div>
                            <span class="text-gray-700">Support premium 24/7</span>
                        </li>
                        <li class="flex items-start">
                            <div class="feature-icon text-accent-500 mr-3 mt-1">
                                <i class="fas fa-check-circle"></i>
                            </div>
                            <span class="text-gray-700">Domaine personnalisé inclus</span>
                        </li>
                        <li class="flex items-start">
                            <div class="feature-icon text-accent-500 mr-3 mt-1">
                                <i class="fas fa-check-circle"></i>
                            </div>
                            <span class="text-gray-700">Hébergement gratuit 5 ans</span>
                        </li>
                        <li class="flex items-start">
                            <div class="feature-icon text-accent-500 mr-3 mt-1">
                                <i class="fas fa-check-circle"></i>
                            </div>
                            <span class="text-gray-700">Référencement SEO expert</span>
                        </li>
                        <li class="flex items-start">
                            <div class="feature-icon text-accent-500 mr-3 mt-1">
                                <i class="fas fa-check-circle"></i>
                            </div>
                            <span class="text-gray-700">Certificat SSL gratuit (HTTPS)</span>
                        </li>
                        <li class="flex items-start">
                            <div class="feature-icon text-accent-500 mr-3 mt-1">
                                <i class="fas fa-check-circle"></i>
                            </div>
                            <span class="text-gray-700">CDN intégré pour chargement ultra-rapide</span>
                        </li>
                        <li class="flex items-start">
                            <div class="feature-icon text-accent-500 mr-3 mt-1">
                                <i class="fas fa-check-circle"></i>
                            </div>
                            <span class="text-gray-700">Optimisation de la vitesse (core web vitals)</span>
                        </li>
                        <li class="flex items-start">
                            <div class="feature-icon text-accent-500 mr-3 mt-1">
                                <i class="fas fa-check-circle"></i>
                            </div>
                            <span class="text-gray-700">Intégration CRM</span>
                        </li>
                        <li class="flex items-start">
                            <div class="feature-icon text-accent-500 mr-3 mt-1">
                                <i class="fas fa-check-circle"></i>
                            </div>
                            <span class="text-gray-700">Automatisation marketing & workflows</span>
                        </li>
                        <li class="flex items-start">
                            <div class="feature-icon text-accent-500 mr-3 mt-1">
                                <i class="fas fa-check-circle"></i>
                            </div>
                            <span class="text-gray-700">Module de réservation/rendez-vous en ligne</span>
                        </li>
                        <li class="flex items-start">
                            <div class="feature-icon text-accent-500 mr-3 mt-1">
                                <i class="fas fa-check-circle"></i>
                            </div>
                            <span class="text-gray-700">Gestion des avis et notations clients</span>
                        </li>
                        <li class="flex items-start">
                            <div class="feature-icon text-accent-500 mr-3 mt-1">
                                <i class="fas fa-check-circle"></i>
                            </div>
                            <span class="text-gray-700">Newsletter & séquences automatiques</span>
                        </li>
                        <li class="flex items-start">
                            <div class="feature-icon text-accent-500 mr-3 mt-1">
                                <i class="fas fa-check-circle"></i>
                            </div>
                            <span class="text-gray-700">Chatbots IA & réponse automatique</span>
                        </li>
                        <li class="flex items-start">
                            <div class="feature-icon text-accent-500 mr-3 mt-1">
                                <i class="fas fa-check-circle"></i>
                            </div>
                            <span class="text-gray-700">Multilingue (jusqu'à 5 langues)</span>
                        </li>
                        <li class="flex items-start">
                            <div class="feature-icon text-accent-500 mr-3 mt-1">
                                <i class="fas fa-check-circle"></i>
                            </div>
                            <span class="text-gray-700">Traduction professionnelle incluse</span>
                        </li>
                        <li class="flex items-start">
                            <div class="feature-icon text-accent-500 mr-3 mt-1">
                                <i class="fas fa-check-circle"></i>
                            </div>
                            <span class="text-gray-700">Hébergement haute disponibilité</span>
                        </li>
                        <li class="flex items-start">
                            <div class="feature-icon text-accent-500 mr-3 mt-1">
                                <i class="fas fa-check-circle"></i>
                            </div>
                            <span class="text-gray-700">Sauvegardes quotidiennes & restauration</span>
                        </li>
                        <li class="flex items-start">
                            <div class="feature-icon text-accent-500 mr-3 mt-1">
                                <i class="fas fa-check-circle"></i>
                            </div>
                            <span class="text-gray-700">Sécurité renforcée</span>
                        </li>
                        <li class="flex items-start">
                            <div class="feature-icon text-accent-500 mr-3 mt-1">
                                <i class="fas fa-check-circle"></i>
                            </div>
                            <span class="text-gray-700">Mise à jour logicielle 10</span>
                        </li>
                        <li class="flex items-start">
                            <div class="feature-icon text-accent-500 mr-3 mt-1">
                                <i class="fas fa-check-circle"></i>
                            </div>
                            <span class="text-gray-700">Formation & guide utilisateur personnalisé</span>
                        </li>
                        <li class="flex items-start">
                            <div class="feature-icon text-accent-500 mr-3 mt-1">
                                <i class="fas fa-check-circle"></i>
                            </div>
                            <span class="text-gray-700">Intégration API tierces</span>
                        </li>
                        <li class="flex items-start">
                            <div class="feature-icon text-accent-500 mr-3 mt-1">
                                <i class="fas fa-check-circle"></i>
                            </div>
                            <span class="text-gray-700">Tableau de bord personnalisé</span>
                        </li>
                        <li class="flex items-start">
                            <div class="feature-icon text-accent-500 mr-3 mt-1">
                                <i class="fas fa-check-circle"></i>
                            </div>
                            <span class="text-gray-700">Analyse comportementale</span>
                        </li>
                        <li class="flex items-start">
                            <div class="feature-icon text-accent-500 mr-3 mt-1">
                                <i class="fas fa-check-circle"></i>
                            </div>
                            <span class="text-gray-700">Conformité RGPD & protections vie privée</span>
                        </li>
                        <li class="flex items-start">
                            <div class="feature-icon text-accent-500 mr-3 mt-1">
                                <i class="fas fa-check-circle"></i>
                            </div>
                            <span class="text-gray-700">Monitoring 24/7 & rapports d'uptime</span>
                        </li>
                    </ul>
                    <button class="w-full bg-gradient-to-r from-accent-500 to-accent-700 text-white font-semibold py-3 px-6 rounded-xl hover:shadow-lg transition-all" onclick="selectPackage('Premium')">
                        Optez pour l'excellence <i class="fas fa-gem ml-2"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Contact Form -->
        <div id="contactSection" class="max-w-4xl mx-auto bg-white rounded-2xl shadow-xl overflow-hidden bg-pattern mb-6">
            <div class="md:flex">
                <div class="md:w-1/2 bg-gradient-to-br from-primary-600 to-secondary-600 p-10 text-white flex flex-col justify-center">
                    <h2 class="text-3xl font-bold mb-4">Prêt à démarrer votre projet?</h2>
                    <p class="mb-6 opacity-90">
                        Remplissez ce formulaire et notre équipe vous contactera dans les plus brefs délais pour discuter de votre projet.
                    </p>
                    <div class="space-y-4">
                        <div class="flex items-center">
                            <div class="bg-white bg-opacity-20 p-2 rounded-full mr-3">
                                <i class="fas fa-phone-alt text-sm"></i>
                            </div>
                            <span>+227 70 21 21 12</span>
                        </div>
                        <div class="flex items-center">
                            <div class="bg-white bg-opacity-20 p-2 rounded-full mr-3">
                                <i class="fas fa-envelope text-sm"></i>
                            </div>
                            <span>mpail@ptrniger.com</span>
                        </div>
                        <div class="flex items-center">
                            <div class="bg-white bg-opacity-20 p-2 rounded-full mr-3">
                                <i class="fas fa-map-marker-alt text-sm"></i>
                            </div>
                            <span>Niamey, Niger</span>
                        </div>
                    </div>
                </div>
                <div class="md:w-1/2 p-10">
                    <form id="contactForm" class="space-y-5">
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Votre nom complet</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <i class="fas fa-user text-gray-400"></i>
                                </div>
                                <input type="text" id="name" name="name" required 
                                    class="w-full form-input pl-10 pr-4 py-3 border border-gray-200 rounded-lg focus:ring-2 focus:ring-primary-500">
                            </div>
                        </div>
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email professionnel</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <i class="fas fa-envelope text-gray-400"></i>
                                </div>
                                <input type="email" id="email" name="email" required 
                                    class="w-full form-input pl-10 pr-4 py-3 border border-gray-200 rounded-lg focus:ring-2 focus:ring-primary-500">
                            </div>
                        </div>
                        <div>
                            <label for="phone" class="block text-sm font-medium text-gray-700 mb-1">Numéro de téléphone</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <i class="fas fa-phone text-gray-400"></i>
                                </div>
                                <input type="tel" id="phone" name="phone" required
                                    class="w-full form-input pl-10 pr-4 py-3 border border-gray-200 rounded-lg focus:ring-2 focus:ring-primary-500">
                            </div>
                        </div>
                        <div>
                            <label for="package" class="block text-sm font-medium text-gray-700 mb-1">Offre intéressée</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <i class="fas fa-box-open text-gray-400"></i>
                                </div>
                                <select id="package" name="package" required
                                    class="w-full form-input pl-10 pr-4 py-3 border border-gray-200 rounded-lg focus:ring-2 focus:ring-primary-500 appearance-none">
                                    <option value="">Sélectionnez une option</option>
                                    <option value="Basic">Basic - 50 000 CFA</option>
                                    <option value="Medium">Medium - 150 000 CFA</option>
                                    <option value="Premium">Premium - 500 000 CFA</option>
                                </select>
                                <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                    <i class="fas fa-chevron-down text-gray-400"></i>
                                </div>
                            </div>
                        </div>
                        <div>
                            <label for="contact_method" class="block text-sm font-medium text-gray-700 mb-1">Comment préférez-vous être contacté?</label>
                            <div class="flex space-x-4">
                                <div class="flex items-center">
                                    <input type="radio" id="contact_email" name="contact_method" value="email" checked
                                        class="focus:ring-primary-500 h-4 w-4 text-primary-600 border-gray-300">
                                    <label for="contact_email" class="ml-2 text-sm text-gray-700">Email</label>
                                </div>
                                <div class="flex items-center">
                                    <input type="radio" id="contact_phone" name="contact_method" value="phone"
                                        class="focus:ring-primary-500 h-4 w-4 text-primary-600 border-gray-300">
                                    <label for="contact_phone" class="ml-2 text-sm text-gray-700">Téléphone</label>
                                </div>
                                <div class="flex items-center">
                                    <input type="radio" id="contact_both" name="contact_method" value="both"
                                        class="focus:ring-primary-500 h-4 w-4 text-primary-600 border-gray-300">
                                    <label for="contact_both" class="ml-2 text-sm text-gray-700">Les deux</label>
                                </div>
                            </div>
                        </div>
                        <div>
                            <label for="message" class="block text-sm font-medium text-gray-700 mb-1">Détails de votre projet</label>
                            <textarea id="message" name="message" rows="4" 
                                class="w-full form-input px-4 py-3 border border-gray-200 rounded-lg focus:ring-2 focus:ring-primary-500"></textarea>
                        </div>
                        <div class="flex items-start">
                            <div class="flex items-center h-5">
                                <input id="consent" name="consent" type="checkbox" required 
                                    class="focus:ring-primary-500 h-4 w-4 text-primary-600 border-gray-300 rounded">
                            </div>
                            <div class="ml-3 text-sm">
                                <label for="consent" class="font-medium text-gray-700">
                                    J'accepte que PTR-Niger utilise mes informations pour me recontacter.
                                </label>
                            </div>
                        </div>
                        <div>
                            <button type="submit" id="submitBtn"
                                class="w-full btn-primary text-white font-semibold py-3 px-6 rounded-lg flex items-center justify-center hover:shadow-md transition-all">
                                <span id="submitText">Envoyer la demande <i class="fas fa-paper-plane ml-2"></i></span>
                                <span id="loadingIndicator" class="hidden">
                                    <svg class="animate-spin h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                                    </svg>
                                    <span class="ml-2">Envoi en cours...</span>
                                </span>
                            </button>
                        </div>
                        <div id="errorMessage" class="text-accent-600 mt-3 text-center hidden bg-accent-50 p-3 rounded-lg border border-accent-200"></div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Success Modal -->
        <div id="successModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 hidden">
            <div class="bg-white rounded-2xl p-10 max-w-md mx-4 modal-enter">
                <div class="text-center">
                    <div class="mx-auto flex items-center justify-center h-16 w-16 rounded-full bg-green-100 mb-6">
                        <i class="fas fa-check-circle text-green-600 text-3xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-3">Demande envoyée!</h3>
                    <p class="text-gray-600 mb-8">
                        Nous avons bien reçu votre demande. Notre équipe vous contactera dans les plus brefs délais pour discuter de votre projet.
                    </p>
                    <button onclick="closeModal()" 
                        class="px-6 py-2 bg-primary-600 text-white rounded-lg font-medium hover:bg-primary-700 transition-all">
                        Fermer <i class="fas fa-times ml-1"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('contactForm').addEventListener('submit', function(e) {
            e.preventDefault();

            // Validation simple des champs requis
            const name = document.getElementById('name').value.trim();
            const email = document.getElementById('email').value.trim();
            const phone = document.getElementById('phone').value.trim();
            const pack = document.getElementById('package').value;
            
            if (!name || !email || !phone || !pack) {
                // Afficher le message d'erreur
                const errorMsg = document.getElementById('errorMessage');
                errorMsg.textContent = 'Veuillez remplir tous les champs obligatoires.';
                errorMsg.classList.remove('hidden');
                return;
            }
            
            // Validation de l'email
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(email)) {
                const errorMsg = document.getElementById('errorMessage');
                errorMsg.textContent = 'Veuillez entrer une adresse email valide.';
                errorMsg.classList.remove('hidden');
                return;
            }
            
            // Masquer message d'erreur
            const errorMsg = document.getElementById('errorMessage');
            errorMsg.classList.add('hidden');

            // 1. Encodage des données du formulaire
            const nameEnc = encodeURIComponent(name);
            const emailEnc = encodeURIComponent(email);
            const phoneEnc = encodeURIComponent(phone);
            const packEnc = encodeURIComponent(pack);
            const methodEnc = encodeURIComponent(document.querySelector('input[name="contact_method"]:checked').value);
            const messageEnc = encodeURIComponent(document.getElementById('message').value.trim());

            // Afficher le loader
            const submitBtn = document.getElementById('submitBtn');
            const submitText = document.getElementById('submitText');
            const loadingIndicator = document.getElementById('loadingIndicator');
            
            submitText.classList.add('hidden');
            loadingIndicator.classList.remove('hidden');
            submitBtn.disabled = true;

            // 2. Construction du message WhatsApp
            const text = 
                `𝗡𝗼𝗺 : ${nameEnc}%0A` +
                `𝗘𝗺𝗮𝗶𝗹 : ${emailEnc}%0A` +
                `𝗧𝗲́𝗹𝗲́𝗽𝗵𝗼𝗻𝗲 : ${phoneEnc}%0A` +
                `𝗢𝗳𝗳𝗿𝗲 : ${packEnc}%0A` +
                `𝗠é𝘁𝗵𝗼𝗱𝗲 𝗱𝗲 𝗰𝗼𝗻𝘁𝗮𝗰𝘁 : ${methodEnc}%0A` +
                `𝗗é𝘁𝗮𝗶𝗹𝘀 : ${messageEnc}`;

            // 3. Numéro WhatsApp de destination au format international (sans + ni espaces)
            const whatsappNumber = '22770212112'; // Numéro WhatsApp de PTR Niger

            // 4. Redirection après un court délai pour montrer le loader
            setTimeout(function() {
                window.location.href = `https://api.whatsapp.com/send?phone=${whatsappNumber}&text=${text}`;
            }, 500);
        });
        
        // Fonction pour sélectionner un forfait et faire défiler vers le formulaire
        function selectPackage(packageName) {
            // Sélectionner le forfait dans le dropdown
            const packageSelect = document.getElementById('package');
            
            // Trouver l'option correspondante
            for (let i = 0; i < packageSelect.options.length; i++) {
                if (packageSelect.options[i].value === packageName) {
                    packageSelect.selectedIndex = i;
                    break;
                }
            }
            
            // Faire défiler vers le formulaire de contact avec une animation fluide
            document.getElementById('contactSection').scrollIntoView({ 
                behavior: 'smooth', 
                block: 'start' 
            });
            
            // Mettre le focus sur le premier champ du formulaire
            setTimeout(() => {
                document.getElementById('name').focus();
            }, 1000);
        }
        
        function closeModal() {
            document.getElementById('successModal').classList.add('hidden');
        }
        
        // Add hover effects to cards
        const cards = document.querySelectorAll('.card-hover');
        cards.forEach(card => {
            card.addEventListener('mouseenter', () => {
                card.classList.add('shadow-xl');
            });
            card.addEventListener('mouseleave', () => {
                card.classList.remove('shadow-xl');
            });
        });
        
        // Animate form inputs on focus
        const inputs = document.querySelectorAll('.form-input');
        inputs.forEach(input => {
            input.addEventListener('focus', () => {
                input.parentElement.querySelector('i').classList.add('text-primary-500');
                input.parentElement.querySelector('i').classList.remove('text-gray-400');
            });
            input.addEventListener('blur', () => {
                input.parentElement.querySelector('i').classList.remove('text-primary-500');
                input.parentElement.querySelector('i').classList.add('text-gray-400');
            });
        });
        
        // Add dynamic animated background elements
        function createRandomBlurCircles() {
            const container = document.querySelector('.animated-bg');
            const colors = [
                'rgba(14, 165, 233, 0.2)',
                'rgba(139, 92, 246, 0.2)',
                'rgba(236, 72, 153, 0.2)',
                'rgba(245, 158, 11, 0.2)'
            ];
            
            for (let i = 0; i < 5; i++) {
                const size = Math.random() * 300 + 100;
                const circle = document.createElement('div');
                circle.className = 'blur-circle';
                circle.style.width = `${size}px`;
                circle.style.height = `${size}px`;
                circle.style.background = colors[Math.floor(Math.random() * colors.length)];
                circle.style.top = `${Math.random() * 100}%`;
                circle.style.left = `${Math.random() * 100}%`;
                circle.style.animationDelay = `${Math.random() * 10}s`;
                container.appendChild(circle);
            }
        }
        
        // Call once on page load
        window.addEventListener('load', createRandomBlurCircles);
    </script>
</body>
</html>