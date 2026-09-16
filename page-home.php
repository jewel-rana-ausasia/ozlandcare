<?php

/**
 * Template Name: Home Page
 * Description: Custom home page template for Ozland Care
 */

get_header();
?>

<style>
    .assessment-stage {
        isolation: isolate;
        background:
            linear-gradient(135deg, #f7fcf8 0%, #ffffff 46%, #f4fbf5 100%);
    }

    .assessment-stage::before {
        position: absolute;
        inset: 0;
        z-index: -2;
        background-image:
            linear-gradient(rgba(64, 180, 80, 0.025) 1px, transparent 1px),
            linear-gradient(90deg, rgba(64, 180, 80, 0.025) 1px, transparent 1px);
        background-size: 64px 64px;
        content: "";
        -webkit-mask-image: linear-gradient(to bottom, black, transparent 82%);
        mask-image: linear-gradient(to bottom, black, transparent 82%);
    }

    .assessment-stage::after {
        position: absolute;
        inset: auto 0 0;
        z-index: -1;
        height: 24%;
        background: linear-gradient(to top, rgba(255, 255, 255, 0.88), transparent);
        content: "";
        pointer-events: none;
    }

    .assessment-shape {
        position: absolute;
        pointer-events: none;
    }

    .assessment-shape--left-panel {
        top: -18%;
        left: -12%;
        width: 52%;
        height: 72%;
        background: linear-gradient(145deg, #d9f2b1 0%, #eef9df 62%, rgba(255, 255, 255, 0.78) 100%);
        clip-path: polygon(0 0, 70% 0, 100% 38%, 68% 100%, 0 82%);
        filter: drop-shadow(0 24px 45px rgba(64, 180, 80, 0.07));
    }

    .assessment-shape--left-fold {
        top: -8%;
        left: 13%;
        width: 26%;
        height: 50%;
        border: 1px solid rgba(64, 180, 80, 0.1);
        border-radius: 4rem;
        background: linear-gradient(145deg, rgba(255, 255, 255, 0.74), rgba(217, 242, 177, 0.35));
        transform: rotate(43deg);
        box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.9);
    }

    .assessment-shape--right-accent {
        top: -8.5rem;
        right: -5.5rem;
        width: 25rem;
        height: 22rem;
        border-radius: 0 0 0 9rem;
        background: linear-gradient(145deg, #258c36 0%, #40b450 58%, #8bd266 100%);
        clip-path: polygon(32% 0, 100% 0, 100% 100%, 12% 76%, 0 48%);
        box-shadow: 0 24px 65px rgba(64, 180, 80, 0.16);
    }

    .assessment-shape--right-accent::after {
        position: absolute;
        inset: 2.25rem 1.75rem 1.75rem 3.75rem;
        border: 1px solid rgba(255, 255, 255, 0.25);
        border-radius: 0 0 0 6rem;
        content: "";
    }

    .assessment-shape--right-highlight {
        top: -5.25rem;
        right: 1.5rem;
        width: 16rem;
        height: 14rem;
        border-radius: 0 0 0 7rem;
        background: linear-gradient(145deg, rgba(255, 255, 255, 0.22), rgba(255, 255, 255, 0));
        transform: rotate(-6deg);
    }

    .assessment-shape--left-orbit {
        bottom: -9rem;
        left: -8rem;
        width: 23rem;
        height: 23rem;
        border: 2.75rem solid rgba(64, 180, 80, 0.1);
        border-radius: 9999px;
        background: rgba(64, 180, 80, 0.025);
        box-shadow:
            0 0 0 1px rgba(64, 180, 80, 0.1),
            inset 0 0 0 1px rgba(255, 255, 255, 0.75);
    }

    .assessment-shape--left-orbit::after {
        position: absolute;
        inset: -1.75rem;
        border: 1px solid rgba(64, 180, 80, 0.11);
        border-radius: inherit;
        content: "";
    }

    .assessment-shape--right-orbit {
        right: -10rem;
        bottom: -11rem;
        width: 25rem;
        height: 25rem;
        border: 2.5rem solid rgba(64, 180, 80, 0.045);
        border-radius: 9999px;
        box-shadow: 0 0 0 1px rgba(64, 180, 80, 0.08);
    }

    .assessment-shape--spotlight {
        top: 38%;
        left: 50%;
        width: min(78rem, 86%);
        height: 54%;
        border-radius: 9999px;
        background: rgba(255, 255, 255, 0.7);
        filter: blur(55px);
        transform: translateX(-50%);
    }

    .assessment-shape--line {
        top: 23%;
        right: 2.5%;
        width: 14rem;
        height: 14rem;
        border: 1px solid rgba(64, 180, 80, 0.12);
        border-radius: 2.5rem;
        transform: rotate(32deg);
    }

    .assessment-shape--line::before,
    .assessment-shape--line::after {
        position: absolute;
        border: 1px solid rgba(64, 180, 80, 0.08);
        border-radius: inherit;
        content: "";
    }

    .assessment-shape--line::before {
        inset: 1.25rem;
    }

    .assessment-shape--line::after {
        inset: 2.5rem;
    }

    .assessment-dots {
        position: absolute;
        width: 10rem;
        height: 10rem;
        background-image: radial-gradient(rgba(64, 180, 80, 0.58) 1.2px, transparent 1.2px);
        background-size: 12px 12px;
        -webkit-mask-image: radial-gradient(circle, black 18%, transparent 70%);
        mask-image: radial-gradient(circle, black 18%, transparent 70%);
        pointer-events: none;
    }

    .assessment-dots--top {
        top: 2.5rem;
        left: 3%;
        opacity: 0.35;
    }

    .assessment-dots--bottom {
        right: 3%;
        bottom: 2rem;
        opacity: 0.24;
    }

    @media (max-width: 1023px) {
        .assessment-shape--left-panel {
            left: -28%;
            width: 82%;
            height: 48%;
        }

        .assessment-shape--right-accent {
            top: -8rem;
            right: -7rem;
            width: 22rem;
            height: 19rem;
            opacity: 0.9;
        }

        .assessment-shape--left-fold,
        .assessment-shape--line {
            display: none;
        }
    }

    @media (max-width: 639px) {
        .assessment-stage::before {
            background-size: 44px 44px;
        }

        .assessment-shape--left-panel {
            top: -8%;
            left: -48%;
            width: 115%;
            height: 32%;
        }

        .assessment-shape--right-accent {
            top: -7rem;
            right: -8.5rem;
            width: 19rem;
            height: 16rem;
            opacity: 0.76;
        }

        .assessment-shape--right-highlight {
            display: none;
        }

        .assessment-shape--left-orbit {
            bottom: -7rem;
            left: -8rem;
            width: 18rem;
            height: 18rem;
            border-width: 2rem;
        }

        .assessment-shape--right-orbit {
            right: -9rem;
            bottom: -8rem;
            width: 19rem;
            height: 19rem;
            border-width: 2rem;
        }

        .assessment-dots--top {
            top: 1rem;
            left: -1.5rem;
        }
    }
</style>

<section class="assessment-stage relative py-16 px-4 font-sans text-[#1a1a1a] overflow-hidden min-h-[900px] flex flex-col justify-center">

    <div class="absolute inset-0 pointer-events-none overflow-hidden z-0" aria-hidden="true">
        <div class="assessment-shape assessment-shape--spotlight"></div>
        <div class="assessment-shape assessment-shape--left-panel"></div>
        <div class="assessment-shape assessment-shape--left-fold"></div>
        <div class="assessment-shape assessment-shape--right-accent"></div>
        <div class="assessment-shape assessment-shape--right-highlight"></div>
        <div class="assessment-shape assessment-shape--left-orbit"></div>
        <div class="assessment-shape assessment-shape--right-orbit"></div>
        <div class="assessment-shape assessment-shape--line"></div>
        <div class="assessment-dots assessment-dots--top"></div>
        <div class="assessment-dots assessment-dots--bottom"></div>
    </div>

    <div class="max-w-6xl mx-auto w-full text-center mb-10 relative z-10">
        <div class="inline-block relative mb-4">
            <div class="bg-[#702d7e] text-white text-xs font-black px-6 py-2 rounded-full shadow-md uppercase tracking-wider relative">
                Take A Quick 1-Minute Self-Assessment
                <div class="absolute -bottom-1 left-1/2 -translate-x-1/2 w-3 h-3 bg-[#702d7e] rotate-45"></div>
            </div>
        </div>
        <h1 class="text-3xl md:text-4xl font-black text-[#1a1a1a] tracking-tight max-w-2xl mx-auto leading-tight">
            Let’s explore what support options may be available?
        </h1>
    </div>

    <div class="max-w-6xl mx-auto w-full grid grid-cols-1 lg:grid-cols-7 gap-8 items-start relative z-10 px-2">

        <div class="lg:col-span-5 bg-white shadow-2xl border border-slate-100/80 overflow-hidden transition-all duration-500">

            <div class="bg-gradient-to-r from-white via-slate-50/40 to-white border-b border-slate-100 pt-8 pb-6 px-6 md:px-10 flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
                <div class="text-left">
                    <div class="inline-flex items-center gap-1.5 bg-rose-50 text-rose-700 text-[10px] font-black px-3 py-1 rounded-full mb-1.5 uppercase tracking-widest border border-rose-600/10">
                        <span class="w-1.5 h-1.5 rounded-full bg-rose-500 animate-pulse"></span>
                        Self-Assessment
                    </div>
                    <h2 class="text-xl font-black tracking-tight text-[#1a1a1a]">Ozland Care</h2>
                </div>
                <div id="progressContainer" class="flex items-center gap-4">
                    <div class="text-left sm:text-right">
                        <p class="text-[9px] font-black text-gray-400 uppercase tracking-wider">Current Progress</p>
                        <span id="progressText" class="text-2xl font-black text-[#702d7e]">0%</span>
                    </div>
                    <div class="w-24 h-2.5 bg-slate-100 rounded-full overflow-hidden p-[2px] border border-slate-200/50">
                        <div id="progressBar" class="h-full bg-gradient-to-r from-[#702d7e] to-[#e11d48] rounded-full transition-all duration-500" style="width: 0%"></div>
                    </div>
                </div>
            </div>

            <div class="px-6 md:px-10 py-8">
                <form id="assessmentForm" onsubmit="handleFormSubmit(event)" class="min-h-[360px] flex flex-col justify-between">
                    <div id="stepsContainer" class="w-full">

                        <div class="step-content active animate-fadeIn" data-step="1">
                            <p class="text-xs font-black text-rose-600 uppercase mb-3 tracking-widest">Question 1 of 7</p>
                            <h3 class="text-xl md:text-2xl font-bold mb-6 text-slate-900">Who is the support for? <span class="text-red-500">*</span></h3>
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                                <label class="group relative flex flex-col justify-between p-6 border-2 border-slate-100 rounded-xl cursor-pointer hover:border-[#702d7e] transition-all has-[:checked]:border-[#702d7e] has-[:checked]:bg-[#702d7e]/5 shadow-sm hover:shadow-md">
                                    <div class="flex items-center justify-between mb-3">
                                        <span class="font-black text-slate-800 group-hover:text-[#702d7e] transition-colors text-base">Myself</span>
                                        <input type="radio" name="core_support_type" value="myself" class="w-5 h-5 accent-[#702d7e]" required>
                                    </div>
                                </label>
                                <label class="group relative flex flex-col justify-between p-6 border-2 border-slate-100 rounded-xl cursor-pointer hover:border-[#702d7e] transition-all has-[:checked]:border-[#702d7e] has-[:checked]:bg-[#702d7e]/5 shadow-sm hover:shadow-md">
                                    <div class="flex items-center justify-between mb-3">
                                        <span class="font-black text-slate-800 group-hover:text-[#702d7e] transition-colors text-base">My child</span>
                                        <input type="radio" name="core_support_type" value="child" class="w-5 h-5 accent-[#702d7e]">
                                    </div>
                                </label>
                                <label class="group relative flex flex-col justify-between p-6 border-2 border-slate-100 rounded-xl cursor-pointer hover:border-[#702d7e] transition-all has-[:checked]:border-[#702d7e] has-[:checked]:bg-[#702d7e]/5 shadow-sm hover:shadow-md">
                                    <div class="flex items-center justify-between mb-3">
                                        <span class="font-black text-slate-800 group-hover:text-[#702d7e] transition-colors text-base">A family member or friend</span>
                                        <input type="radio" name="core_support_type" value="other" class="w-5 h-5 accent-[#702d7e]">
                                    </div>
                                </label>
                            </div>
                        </div>

                        <div class="step-content hidden animate-fadeIn" data-step="2">
                            <p class="text-xs font-black text-rose-600 uppercase mb-3 tracking-widest">Question 2 of 7</p>
                            <h3 class="text-xl md:text-2xl font-bold mb-6 text-slate-900" data-dynamic-text='{"myself": "Where do you live?", "child": "Where does your child live?", "other": "Where does the person live?"}'>Where do you live? <span class="text-red-500">*</span></h3>
                            <div class="max-w-md">
                                <div class="relative rounded-xl shadow-sm">
                                    <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                        <svg class="h-5 w-5 text-[#702d7e]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                        </svg>
                                    </div>
                                    <input
                                        type="text"
                                        id="locationInput"
                                        name="suburb_postcode"
                                        placeholder="Enter suburb or postcode"
                                        inputmode="text"
                                        autocomplete="address-level2"
                                        maxlength="80"
                                        class="w-full pl-12 pr-4 py-4 bg-slate-50 border-2 border-slate-100 focus:border-[#702d7e] focus:bg-white rounded-xl outline-none transition-all text-sm font-bold"
                                        required>
                                </div>
                            </div>
                        </div>
                        <div class="step-content hidden animate-fadeIn" data-step="3">
                            <p class="text-xs font-black text-rose-600 uppercase mb-3 tracking-widest">Question 3 of 7</p>
                            <h3 class="text-xl md:text-2xl font-bold mb-6 text-slate-900" data-dynamic-text='{"myself": "Do you have a diagnosed disability or medical condition?", "child": "Does your child have a diagnosed disability or medical condition?", "other": "Does the person have a diagnosed disability or medical condition?"}'>Do you have a diagnosed disability or medical condition? <span class="text-red-500">*</span></h3>
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 max-w-2xl">
                                <label class="group flex items-center justify-between p-4 border-2 border-slate-100 rounded-xl cursor-pointer hover:border-[#702d7e] transition-all has-[:checked]:border-[#702d7e] has-[:checked]:bg-[#702d7e]/5 shadow-sm">
                                    <span class="font-bold text-slate-700">Yes</span>
                                    <input type="radio" name="diagnosed_condition" value="yes" class="w-5 h-5 accent-[#702d7e]" required>
                                </label>
                                <label class="group flex items-center justify-between p-4 border-2 border-slate-100 rounded-xl cursor-pointer hover:border-[#702d7e] transition-all has-[:checked]:border-[#702d7e] has-[:checked]:bg-[#702d7e]/5 shadow-sm">
                                    <span class="font-bold text-slate-700">No</span>
                                    <input type="radio" name="diagnosed_condition" value="no" class="w-5 h-5 accent-[#702d7e]">
                                </label>
                                <label class="group flex items-center justify-between p-4 border-2 border-slate-100 rounded-xl cursor-pointer hover:border-[#702d7e] transition-all has-[:checked]:border-[#702d7e] has-[:checked]:bg-[#702d7e]/5 shadow-sm">
                                    <span class="font-bold text-slate-700">Not sure</span>
                                    <input type="radio" name="diagnosed_condition" value="not_sure" class="w-5 h-5 accent-[#702d7e]">
                                </label>
                            </div>
                        </div>
                        <div class="step-content hidden animate-fadeIn" data-step="4">
                            <p class="text-xs font-black text-rose-600 uppercase mb-3 tracking-widest">Question 4 of 7</p>
                            <h3 class="text-xl md:text-2xl font-bold mb-6 text-slate-900" data-dynamic-text='{"myself": "Which of the following best describes your current support situation?", "child": "Which of the following best describes your child’s current support situation?", "other": "Which of the following best describes the person’s current support situation?"}'>Which of the following best describes your current support situation? <span class="text-red-500">*</span></h3>
                            <div class="grid grid-cols-1 gap-3.5 max-w-xl">
                                <label class="flex items-center p-4 bg-slate-50 border-2 border-transparent rounded-xl hover:border-[#702d7e]/40 cursor-pointer transition-all has-[:checked]:border-[#702d7e] has-[:checked]:bg-white shadow-sm">
                                    <input type="radio" name="funding_situation" value="no_support" class="w-5 h-5 accent-[#702d7e]" required>
                                    <span class="ml-4 text-slate-700 font-bold text-sm" data-dynamic-label='{"myself": "I am not currently receiving any support", "child": "My child is not currently receiving any support", "other": "The person is not currently receiving any support. "}'>I am not currently receiving any support</span>
                                </label>
                                <label class="flex items-center p-4 bg-slate-50 border-2 border-transparent rounded-xl hover:border-[#702d7e]/40 cursor-pointer transition-all has-[:checked]:border-[#702d7e] has-[:checked]:bg-white shadow-sm">
                                    <input type="radio" name="funding_situation" value="ndis_supported" class="w-5 h-5 accent-[#702d7e]">
                                    <span class="ml-4 text-slate-700 font-bold text-sm" data-dynamic-label='{"myself": "I receive support through the NDIS", "child": "My child receives support through the NDIS", "other": "The person receives support through the NDIS."}'>I receive support through the NDIS</span>
                                </label>
                                <label class="flex items-center p-4 bg-slate-50 border-2 border-transparent rounded-xl hover:border-[#702d7e]/40 cursor-pointer transition-all has-[:checked]:border-[#702d7e] has-[:checked]:bg-white shadow-sm">
                                    <input type="radio" name="funding_situation" value="non_ndis_funded" class="w-5 h-5 accent-[#702d7e]">
                                    <span class="ml-4 text-slate-700 font-bold text-sm" data-dynamic-label='{"myself": "I receive support that is not funded by the NDIS", "child": "My child receives support that is not funded by the NDIS", "other": "The person receives support that is not funded by the NDIS."}'>I receive support that is not funded by the NDIS</span>
                                </label>
                                <label class="flex items-center p-4 bg-slate-50 border-2 border-transparent rounded-xl hover:border-[#702d7e]/40 cursor-pointer transition-all has-[:checked]:border-[#702d7e] has-[:checked]:bg-white shadow-sm">
                                    <input type="radio" name="funding_situation" value="ndis_applied" class="w-5 h-5 accent-[#702d7e]">
                                    <span class="ml-4 text-slate-700 font-bold text-sm" data-dynamic-label='{"myself": "I have applied for the NDIS and am waiting for approval.", "child": "My child has applied for the NDIS and is waiting for approval.", "other": "The person has applied for the NDIS and is waiting for approval."}'>I have applied for the NDIS / am waiting for approval</span>
                                </label>
                            </div>
                        </div>

                        <div class="step-content hidden animate-fadeIn" data-step="5">
                            <p class="text-xs font-black text-rose-600 uppercase mb-3 tracking-widest">Question 5 of 7</p>
                            <h3 class="text-xl md:text-2xl font-bold mb-6 text-slate-900" data-dynamic-text='{"myself": "What age group best describes you?", "child": "What age group best describes your child?", "other": "What age group best describes the person?"}'>What age group best describes you? <span class="text-red-500">*</span></h3>
                            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-5 gap-3">
                                <label class="group flex flex-col items-center justify-center p-4 border-2 border-slate-100 rounded-xl cursor-pointer hover:border-[#702d7e] transition-all has-[:checked]:border-[#702d7e] has-[:checked]:bg-[#702d7e]/5 text-center shadow-sm">
                                    <input type="radio" name="age_segment" value="7-17" class="w-4 h-4 accent-[#702d7e] mb-2">
                                    <span class="font-black text-slate-800 text-sm">7–17 years</span>
                                </label>
                                <label class="group flex flex-col items-center justify-center p-4 border-2 border-slate-100 rounded-xl cursor-pointer hover:border-[#702d7e] transition-all has-[:checked]:border-[#702d7e] has-[:checked]:bg-[#702d7e]/5 text-center shadow-sm">
                                    <input type="radio" name="age_segment" value="18-39" class="w-4 h-4 accent-[#702d7e] mb-2">
                                    <span class="font-black text-slate-800 text-sm">18–39 years</span>
                                </label>
                                <label class="group flex flex-col items-center justify-center p-4 border-2 border-slate-100 rounded-xl cursor-pointer hover:border-[#702d7e] transition-all has-[:checked]:border-[#702d7e] has-[:checked]:bg-[#702d7e]/5 text-center shadow-sm">
                                    <input type="radio" name="age_segment" value="40-64" class="w-4 h-4 accent-[#702d7e] mb-2">
                                    <span class="font-black text-slate-800 text-sm">40–64 years</span>
                                </label>
                                <label class="group flex flex-col items-center justify-center p-4 border-2 border-slate-100 rounded-xl cursor-pointer hover:border-[#702d7e] transition-all has-[:checked]:border-[#702d7e] has-[:checked]:bg-[#702d7e]/5 text-center shadow-sm">
                                    <input type="radio" name="age_segment" value="65+" class="w-4 h-4 accent-[#702d7e] mb-2">
                                    <span class="font-black text-slate-800 text-sm">65+ years</span>
                                </label>
                            </div>
                        </div>

                        <div class="step-content hidden animate-fadeIn" data-step="6">
                            <p class="text-xs font-black text-rose-600 uppercase mb-3 tracking-widest">Question 6 of 7</p>
                            <h3 class="text-xl md:text-2xl font-bold mb-2 text-slate-900" data-dynamic-text='{"myself": "What kind of support are you looking for?", "child": "What kind of support is your child looking for?", "other": "What kind of support is the person looking for?"}'>What kind of support are you looking for? <span class="text-red-500">*</span></h3>
                            <p class="text-xs font-bold text-gray-400 uppercase tracking-wider mb-5">Select all options that apply</p>
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                                <label class="flex items-center p-3.5 bg-slate-50 rounded-xl border-2 border-transparent hover:border-primary/30 cursor-pointer transition-all has-[:checked]:border-primary has-[:checked]:bg-white shadow-sm">
                                    <input type="checkbox" name="support_categories" value="daily_living" class="w-4 h-4 rounded accent-primary checkbox-group">
                                    <span class="ml-3 text-sm font-bold text-slate-700">Assistance with daily living</span>
                                </label>
                                <label class="flex items-center p-3.5 bg-slate-50 rounded-xl border-2 border-transparent hover:border-primary/30 cursor-pointer transition-all has-[:checked]:border-primary has-[:checked]:bg-white shadow-sm">
                                    <input type="checkbox" name="support_categories" value="personal_care" class="w-4 h-4 rounded accent-primary checkbox-group">
                                    <span class="ml-3 text-sm font-bold text-slate-700">Personal care support</span>
                                </label>
                                <label class="flex items-center p-3.5 bg-slate-50 rounded-xl border-2 border-transparent hover:border-primary/30 cursor-pointer transition-all has-[:checked]:border-primary has-[:checked]:bg-white shadow-sm">
                                    <input type="checkbox" name="support_categories" value="community" class="w-4 h-4 rounded accent-primary checkbox-group">
                                    <span class="ml-3 text-sm font-bold text-slate-700">Community participation</span>
                                </label>
                                <label class="flex items-center p-3.5 bg-slate-50 rounded-xl border-2 border-transparent hover:border-primary/30 cursor-pointer transition-all has-[:checked]:border-primary has-[:checked]:bg-white shadow-sm">
                                    <input type="checkbox" name="support_categories" value="transport" class="w-4 h-4 rounded accent-primary checkbox-group">
                                    <span class="ml-3 text-sm font-bold text-slate-700">Transport and travel support</span>
                                </label>
                                <label class="flex items-center p-3.5 bg-slate-50 rounded-xl border-2 border-transparent hover:border-primary/30 cursor-pointer transition-all has-[:checked]:border-primary has-[:checked]:bg-white shadow-sm">
                                    <input type="checkbox" name="support_categories" value="household" class="w-4 h-4 rounded accent-primary checkbox-group">
                                    <span class="ml-3 text-sm font-bold text-slate-700">Household tasks and cleaning</span>
                                </label>
                                <label class="flex items-center p-3.5 bg-slate-50 rounded-xl border-2 border-transparent hover:border-primary/30 cursor-pointer transition-all has-[:checked]:border-primary has-[:checked]:bg-white shadow-sm">
                                    <input type="checkbox" name="support_categories" value="skills" class="w-4 h-4 rounded accent-primary checkbox-group">
                                    <span class="ml-3 text-sm font-bold text-slate-700">Social and life skills development</span>
                                </label>
                                <label class="flex items-center p-3.5 bg-slate-50 rounded-xl border-2 border-transparent hover:border-primary/30 cursor-pointer transition-all has-[:checked]:border-primary has-[:checked]:bg-white shadow-sm">
                                    <input type="checkbox" name="support_categories" value="high_care" class="w-4 h-4 rounded accent-primary checkbox-group">
                                    <span class="ml-3 text-sm font-bold text-slate-700">High care support</span>
                                </label>
                                <label class="flex items-center p-3.5 bg-slate-50 rounded-xl border-2 border-transparent hover:border-primary/30 cursor-pointer transition-all has-[:checked]:border-primary has-[:checked]:bg-white shadow-sm">
                                    <input type="checkbox" name="support_categories" value="accommodation" class="w-4 h-4 rounded accent-primary checkbox-group">
                                    <span class="ml-3 text-sm font-bold text-slate-700">Supported accommodation</span>
                                </label>
                                <label class="flex items-center p-3.5 bg-slate-50 rounded-xl border-2 border-transparent hover:border-primary/30 cursor-pointer transition-all has-[:checked]:border-primary has-[:checked]:bg-white shadow-sm sm:col-span-2">
                                    <input type="checkbox" name="support_categories" value="not_sure" class="w-4 h-4 rounded accent-primary checkbox-group">
                                    <span class="ml-3 text-sm font-bold text-slate-700">Not sure yet</span>
                                </label>
                            </div>
                        </div>

                        <div class="step-content hidden animate-fadeIn" data-step="7">
                            <p class="text-xs font-black text-rose-600 uppercase mb-3 tracking-widest">Question 7 of 7</p>
                            <h3 class="text-xl md:text-2xl font-bold mb-6 text-slate-900" data-dynamic-text='{"myself": "How much support do you need each day?", "child": "How much support does your child need each day?", "other": "How much support does the person need each day?"}'>How much support do you need each day? <span class="text-red-500">*</span></h3>
                            <div class="grid grid-cols-1 gap-3 max-w-md">
                                <label class="flex items-center p-4 bg-slate-50 border-2 border-transparent rounded-xl hover:border-[#702d7e]/30 cursor-pointer transition-all has-[:checked]:border-[#702d7e] has-[:checked]:bg-white shadow-sm">
                                    <input type="radio" name="support_hours" value="none" class="w-5 h-5 accent-[#702d7e]" required>
                                    <span class="ml-4 text-slate-700 font-bold text-sm">None at the moment</span>
                                </label>
                                <label class="flex items-center p-4 bg-slate-50 border-2 border-transparent rounded-xl hover:border-[#702d7e]/30 cursor-pointer transition-all has-[:checked]:border-[#702d7e] has-[:checked]:bg-white shadow-sm">
                                    <input type="radio" name="support_hours" value="1-2" class="w-5 h-5 accent-[#702d7e]">
                                    <span class="ml-4 text-slate-700 font-bold text-sm">1–2 hours per day</span>
                                </label>
                                <label class="flex items-center p-4 bg-slate-50 border-2 border-transparent rounded-xl hover:border-[#702d7e]/30 cursor-pointer transition-all has-[:checked]:border-[#702d7e] has-[:checked]:bg-white shadow-sm">
                                    <input type="radio" name="support_hours" value="3-5" class="w-5 h-5 accent-[#702d7e]">
                                    <span class="ml-4 text-slate-700 font-bold text-sm">3–5 hours per day</span>
                                </label>
                                <label class="flex items-center p-4 bg-slate-50 border-2 border-transparent rounded-xl hover:border-[#702d7e]/30 cursor-pointer transition-all has-[:checked]:border-[#702d7e] has-[:checked]:bg-white shadow-sm">
                                    <input type="radio" name="support_hours" value="6-10" class="w-5 h-5 accent-[#702d7e]">
                                    <span class="ml-4 text-slate-700 font-bold text-sm">6–10 hours per day</span>
                                </label>
                                <label class="flex items-center p-4 bg-slate-50 border-2 border-transparent rounded-xl hover:border-[#702d7e]/30 cursor-pointer transition-all has-[:checked]:border-[#702d7e] has-[:checked]:bg-white shadow-sm">
                                    <input type="radio" name="support_hours" value="10+" class="w-5 h-5 accent-[#702d7e]">
                                    <span class="ml-4 text-slate-700 font-bold text-sm">More than 10 hours per day</span>
                                </label>
                            </div>
                        </div>

                        <div class="step-content hidden animate-fadeIn" data-step="8">
                            <div class="bg-gradient-to-br from-secondary/10 via-transparent to-[#702d7e]/5 p-6 rounded-2xl border border-slate-100 mb-8">
                                <div class="w-12 h-12 rounded-full bg-secondary/20 flex items-center justify-center mb-4">
                                    <svg class="w-6 h-6 text-secondary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </div>
                                <h3 class="text-xl font-black text-slate-900 mb-3">Assessment Summary</h3>
                                <p id="dynamicResultText" class="text-base text-slate-700 font-bold leading-relaxed"></p>
                            </div>

                            <h4 class="text-xs font-black text-gray-400 uppercase tracking-widest mb-4">Select an Action Plan Below</h4>
                            <div id="ctaContainer" class="grid grid-cols-1 sm:grid-cols-3 gap-4 mb-8">
                            </div>

                            <div class="border-t border-slate-100 pt-6">
                                <h4 class="text-xs font-black text-[#702d7e] uppercase tracking-wider mb-4">Optional: Request Direct Callback From A Specialist</h4>
                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3.5">
                                    <input type="text" id="assessmentFirstName" name="first_name" placeholder="First Name" autocomplete="given-name" title="Enter one first name without spaces." class="p-3.5 bg-slate-50 border-2 border-transparent focus:border-[#702d7e] focus:bg-white rounded-xl outline-none transition-all text-sm font-bold" required>
                                    <input type="text" id="assessmentSurname" name="last_name" placeholder="Surname" autocomplete="family-name" title="Enter one surname without spaces." class="p-3.5 bg-slate-50 border-2 border-transparent focus:border-[#702d7e] focus:bg-white rounded-xl outline-none transition-all text-sm font-bold">

                                    <input
                                        type="tel"
                                        id="assessmentPhone"
                                        name="phone"
                                        placeholder="Mobile"
                                        inputmode="numeric"
                                        autocomplete="tel"
                                        pattern="^04[0-9]{8}$"
                                        minlength="10"
                                        maxlength="10"
                                        title="Enter a valid 10-digit Australian mobile number starting with 04."
                                        class="p-3.5 bg-slate-50 border-2 border-transparent focus:border-[#702d7e] focus:bg-white rounded-xl outline-none transition-all text-sm font-bold"
                                        required>

                                    <input type="email" id="email" name="email" placeholder="Email Address" class="p-3.5 bg-slate-50 border-2 border-transparent focus:border-[#702d7e] focus:bg-white rounded-xl outline-none transition-all text-sm font-bold" required>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div id="formControlActions" class="flex items-center justify-between mt-10 pt-6 border-t border-slate-100">
                        <button type="button" id="prevBtn" class="invisible px-5 py-2.5 text-gray-400 font-black uppercase text-[11px] tracking-widest hover:text-slate-700 transition-all">
                            Back
                        </button>
                        <div class="flex gap-3">
                            <button type="button" id="nextBtn" class="px-10 py-3.5 bg-gradient-to-r from-[#702d7e] to-[#8c3fa1] text-white rounded-xl font-black uppercase text-[11px] tracking-widest transition-all shadow-md hover:opacity-95">
                                Next Step →
                            </button>
                            <button type="submit" id="submitBtn" class="hidden px-10 py-3.5 bg-primary text-white rounded-xl font-black uppercase text-[11px] tracking-widest hover:bg-secondary transition-all shadow-md">
                                Submit Details
                            </button>
                        </div>
                    </div>
                </form>

                <div id="successMessage" class="hidden mt-6 flex items-center gap-3 bg-emerald-50 border-2 border-emerald-200 text-emerald-800 font-bold text-sm px-5 py-4 rounded-xl">
                    <span>Thank you for submitting the Self-Assessment. A member of our team will be in touch soon.</span>
                </div>
            </div>
        </div>

        <div class="lg:col-span-2 bg-white shadow-xl p-5 border border-slate-100/90 relative z-10 lg:sticky lg:top-8">
            <h3 class="text-base font-bold text-slate-900 tracking-tight mb-2 relative pb-2 border-b-2 border-rose-600/10 inline-block w-full">
                Expression Of Interest
                <div class="absolute bottom-[-2px] left-0 w-12 h-[2px] bg-rose-600"></div>
            </h3>
            <p class="text-xs text-slate-900 font-medium mb-4">Quick link documents for reference information guides.</p>

            <ul class="space-y-2">
                <li>
                    <a
                        href="<?php echo esc_url(home_url('/referral/')); ?>"
                        class="group flex items-center gap-3 p-2 rounded-xl hover:bg-slate-50 transition-all duration-200">
                        <span class="w-2 h-2 rounded-full bg-[#702d7e] shrink-0 group-hover:scale-125 transition-transform"></span>
                        <span class="text-xs font-bold text-slate-700 group-hover:text-[#702d7e] transition-colors">Client Referral Form</span>
                    </a>
                </li>
            </ul>
        </div>

    </div>

</section>


<style>
    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(8px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .animate-fadeIn {
        animation: fadeIn 0.4s cubic-bezier(0.16, 1, 0.3, 1) forwards;
    }

    .step-content.hidden {
        display: none;
    }

    .input-error {
        border-color: #ef4444 !important;
        background-color: #fef2f2 !important;
    }
</style>

<script>
    const steps = document.querySelectorAll('.step-content');
    const nextBtn = document.getElementById('nextBtn');
    const prevBtn = document.getElementById('prevBtn');
    const submitBtn = document.getElementById('submitBtn');
    const progressBar = document.getElementById('progressBar');
    const progressText = document.getElementById('progressText');
    const form = document.getElementById('assessmentForm');
    const phoneInput = document.getElementById('assessmentPhone');
    const firstNameInput = document.getElementById('assessmentFirstName');
    const surnameInput = document.getElementById('assessmentSurname');
    const singleNameRegex = /^[\p{L}\p{M}]+(?:['’-][\p{L}\p{M}]+)*$/u;

    let currentStep = 1;
    let selectedSupportType = 'myself';
    let lastValidPhoneValue = '';

    phoneInput.addEventListener('input', () => {
        const digitsOnly = phoneInput.value.replace(/\D/g, '').slice(0, 10);
        const validPartialAustralianMobile = /^(?:|0|04\d{0,8})$/;

        if (validPartialAustralianMobile.test(digitsOnly)) {
            phoneInput.value = digitsOnly;
            lastValidPhoneValue = digitsOnly;
        } else {
            phoneInput.value = lastValidPhoneValue;
        }

        phoneInput.classList.remove('input-error');
    });

    function validateAssessmentName(input, label) {
        const value = input.value.trim();
        const message = value && !singleNameRegex.test(value)
            ? `Enter one ${label} without spaces.`
            : '';

        input.setCustomValidity(message);
        input.classList.toggle('input-error', Boolean(message));

        return !message;
    }

    firstNameInput.addEventListener('input', () => {
        validateAssessmentName(firstNameInput, 'first name');
    });

    surnameInput.addEventListener('input', () => {
        validateAssessmentName(surnameInput, 'surname');
    });

    function applyDynamicWordingSystem() {
        const selectedRadio = document.querySelector('input[name="core_support_type"]:checked');
        if (selectedRadio) {
            selectedSupportType = selectedRadio.value;
        }

        // হেডলাইন বা প্রশ্ন ডাইনামিক করার জন্য
        document.querySelectorAll('[data-dynamic-text]').forEach(element => {
            const translationOptions = JSON.parse(element.getAttribute('data-dynamic-text'));
            if (translationOptions[selectedSupportType]) {
                element.innerHTML = translationOptions[selectedSupportType] + ' <span class="text-red-500">*</span>';
            }
        });

        // Step 4 এর ভেতরের রেডিও অপশনগুলোর টেক্সট ডাইনামিক করার জন্য
        document.querySelectorAll('[data-dynamic-label]').forEach(element => {
            const labelOptions = JSON.parse(element.getAttribute('data-dynamic-label'));
            if (labelOptions[selectedSupportType]) {
                element.innerText = labelOptions[selectedSupportType];
            }
        });
    }

    function buildFinalScreenStructure() {
        const resultTextField = document.getElementById('dynamicResultText');
        const ctaContainer = document.getElementById('ctaContainer');

        // Conditional text based on identity variables
        if (selectedSupportType === 'myself') {
            resultTextField.innerText = "Based on your answers, you may benefit from disability support services that could help with daily living, independence, and community participation.";
        } else if (selectedSupportType === 'child') {
            resultTextField.innerText = "Based on your answers, your child may benefit from disability support services that could help with daily living, development, and community participation.";
        } else {
            resultTextField.innerText = "Based on your answers, the person may benefit from disability support services that could help with daily living, independence, and community participation.";
        }

        // Get NDIS tracking state values
        const chosenFundingElement = document.querySelector('input[name="funding_situation"]:checked');
        const fundingStatus = chosenFundingElement ? chosenFundingElement.value : 'no_support';

        let ctaHTML = '';
        if (fundingStatus === 'ndis_supported') {
            ctaHTML = `
                <div class="flex flex-col p-4 border border-[#702d7e]/20 bg-[#702d7e]/5 rounded-xl text-center items-center justify-between shadow-sm">
                    <span class="text-[9px] font-black text-[#702d7e] uppercase tracking-wider mb-2">Option A</span>
                    <p class="text-xs font-black text-slate-700 mb-4">Review your current NDIS plan</p>
                    <button type="button" onclick="selectCTAAction(this, 'Review NDIS Plan')" class="w-full py-2 px-3 bg-[#702d7e] text-white text-[10px] font-black rounded-lg uppercase tracking-wide">Select Plan</button>
                </div>
                <div class="flex flex-col p-4 border border-[#702d7e]/20 bg-[#702d7e]/5 rounded-xl text-center items-center justify-between shadow-sm">
                    <span class="text-[9px] font-black text-[#702d7e] uppercase tracking-wider mb-2">Option B</span>
                    <p class="text-xs font-black text-slate-700 mb-4">Speak with a support coordinator</p>
                    <button type="button" onclick="selectCTAAction(this, 'Speak with Support Coordinator')" class="w-full py-2 px-3 bg-[#702d7e] text-white text-[10px] font-black rounded-lg uppercase tracking-wide">Select Consult</button>
                </div>
                <div class="flex flex-col p-4 border border-[#702d7e]/20 bg-[#702d7e]/5 rounded-xl text-center items-center justify-between shadow-sm">
                    <span class="text-[9px] font-black text-[#702d7e] uppercase tracking-wider mb-2">Option C</span>
                    <p class="text-xs font-black text-slate-700 mb-4">Get help accessing additional supports</p>
                    <button type="button" onclick="selectCTAAction(this, 'Access Additional Supports')" class="w-full py-2 px-3 bg-[#702d7e] text-white text-[10px] font-black rounded-lg uppercase tracking-wide">Select Access</button>
                </div>`;
        } else {
            ctaHTML = `
                <div class="flex flex-col p-4 border border-[#702d7e]/20 bg-[#702d7e]/5 rounded-xl text-center items-center justify-between shadow-sm">
                    <span class="text-[9px] font-black text-[#702d7e] uppercase tracking-wider mb-2">Option A</span>
                    <p class="text-xs font-black text-slate-700 mb-4">Check eligibility and support options</p>
                    <button type="button" onclick="selectCTAAction(this, 'Check Eligibility Options')" class="w-full py-2 px-3 bg-[#702d7e] text-white text-[10px] font-black rounded-lg uppercase tracking-wide">Select Check</button>
                </div>
                <div class="flex flex-col p-4 border border-[#702d7e]/20 bg-[#702d7e]/5 rounded-xl text-center items-center justify-between shadow-sm">
                    <span class="text-[9px] font-black text-[#702d7e] uppercase tracking-wider mb-2">Option B</span>
                    <p class="text-xs font-black text-slate-700 mb-4">Speak with a support coordinator</p>
                    <button type="button" onclick="selectCTAAction(this, 'Speak with Support Coordinator')" class="w-full py-2 px-3 bg-[#702d7e] text-white text-[10px] font-black rounded-lg uppercase tracking-wide">Select Consult</button>
                </div>
                <div class="flex flex-col p-4 border border-[#702d7e]/20 bg-[#702d7e]/5 rounded-xl text-center items-center justify-between shadow-sm">
                    <span class="text-[9px] font-black text-[#702d7e] uppercase tracking-wider mb-2">Option C</span>
                    <p class="text-xs font-black text-slate-700 mb-4">Request a call back</p>
                    <button type="button" onclick="selectCTAAction(this, 'Request Callback')" class="w-full py-2 px-3 bg-[#702d7e] text-white text-[10px] font-black rounded-lg uppercase tracking-wide">Select Callback</button>
                </div>`;
        }
        ctaContainer.innerHTML = ctaHTML;
    }

    function selectCTAAction(btnRef, actionName) {
        window.selectedCTAWorkflow = actionName;
        btnRef.closest('#ctaContainer').querySelectorAll('button').forEach(btn => {
            btn.innerText = "Select";
            btn.classList.remove('ring-4', 'ring-emerald-500/30');
        });
        btnRef.innerText = "✓ Selected";
    }

    function validateStep() {
        const currentStepEl = document.querySelector(`.step-content[data-step="${currentStep}"]`);

        // 1. Radio Group Validation
        const radioGroups = [...new Set([...currentStepEl.querySelectorAll('input[type="radio"]')].map(i => i.name))];
        for (let groupName of radioGroups) {
            const checked = currentStepEl.querySelector(`input[name="${groupName}"]:checked`);
            if (!checked) {
                alert("Please select an option to continue.");
                return false;
            }
        }

        // 2. Checkbox Group Validation
        const checkboxes = currentStepEl.querySelectorAll('input[type="checkbox"].checkbox-group');
        if (checkboxes.length > 0) {
            const checkedItemExist = Array.from(checkboxes).some(c => c.checked);
            if (!checkedItemExist) {
                alert("Please select at least one option category domain.");
                return false;
            }
        }

        // 3. Text Input Validation
        const textInputs = currentStepEl.querySelectorAll('input[type="text"][required]');
        for (let input of textInputs) {
            const value = input.value.trim();

            if (!value) {
                input.classList.add('input-error');
                input.focus();
                alert("Please fill out all mandatory details.");
                return false;
            }

            // Step 2 - Validate NSW format only when a postcode is entered by itself
            if (input.name === 'suburb_postcode') {
                const nswPostcodeRegex = /^2\d{3}$/;
                const postcodeOnlyRegex = /^\d+$/;

                if (postcodeOnlyRegex.test(value) && !nswPostcodeRegex.test(value)) {
                    input.classList.add('input-error');
                    input.focus();
                    alert("Please enter a valid 4-digit NSW postcode starting with 2 (e.g., 2000).");
                    return false;
                }
            }

            // Remove error if validation passes
            input.classList.remove('input-error');
        }

        return true;
    }

    function updateForm() {
        steps.forEach(s => s.classList.add('hidden'));
        document.querySelector(`.step-content[data-step="${currentStep}"]`).classList.remove('hidden');

        const progress = Math.round(((currentStep - 1) / (steps.length - 1)) * 100);
        progressBar.style.width = progress + '%';
        progressText.innerText = progress + '%';

        prevBtn.style.visibility = (currentStep === 1) ? 'hidden' : 'visible';

        if (currentStep === steps.length) {
            nextBtn.classList.add('hidden');
            submitBtn.classList.remove('hidden');
            document.getElementById('progressContainer').classList.add('opacity-30');
        } else {
            nextBtn.classList.remove('hidden');
            submitBtn.classList.add('hidden');
            document.getElementById('progressContainer').classList.remove('opacity-30');
        }
    }

    nextBtn.onclick = () => {
        if (validateStep()) {
            if (currentStep === 1) {
                applyDynamicWordingSystem();
            }
            if (currentStep < steps.length) {
                currentStep++;
                if (currentStep === steps.length) {
                    buildFinalScreenStructure();
                }
                updateForm();
            }
        }
    };

    prevBtn.onclick = () => {
        if (currentStep > 1) {
            currentStep--;
            updateForm();
        }
    };

    function handleFormSubmit(e) {
        e.preventDefault();

        const phone = phoneInput.value.trim();
        const emailInput = document.getElementById('email');
        const email = emailInput.value.trim();

        phoneInput.classList.remove('input-error');
        emailInput.classList.remove('input-error');

        if (!validateAssessmentName(firstNameInput, 'first name')) {
            firstNameInput.reportValidity();
            firstNameInput.focus();
            return;
        }

        if (!validateAssessmentName(surnameInput, 'surname')) {
            surnameInput.reportValidity();
            surnameInput.focus();
            return;
        }

        const australianMobileRegex = /^04\d{8}$/;
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]{2,}$/;

        if (!australianMobileRegex.test(phone)) {
            phoneInput.classList.add('input-error');
            phoneInput.focus();
            alert("Please enter a valid 10-digit Australian mobile number starting with 04 (e.g. 0412345678).");
            return;
        }

        if (!emailRegex.test(email)) {
            emailInput.classList.add('input-error');
            emailInput.focus();
            alert("Please enter a valid email address.");
            return;
        }

        const formData = new FormData(form);
        const submissionPayload = Object.fromEntries(formData.entries());

        submissionPayload.chosenCTAWorkflow =
            window.selectedCTAWorkflow || 'None Selected';

        console.log('Submission payload compiled:', submissionPayload);

        // If sending via AJAX, put your submit code here (before reset).

        // Reset form back to step 1
        form.reset();
        firstNameInput.setCustomValidity('');
        surnameInput.setCustomValidity('');
        firstNameInput.classList.remove('input-error');
        surnameInput.classList.remove('input-error');
        lastValidPhoneValue = '';
        window.selectedCTAWorkflow = null;
        currentStep = 1;
        updateForm();

        // Show success message
        const successMessage = document.getElementById('successMessage');
        successMessage.classList.remove('hidden');

        // Optional: auto-hide after few seconds
        setTimeout(() => {
            successMessage.classList.add('hidden');
        }, 6000);
    }

    updateForm();
</script>


<style>
    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(10px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .animate-fadeIn {
        animation: fadeIn 0.4s ease forwards;
    }
</style>


<?php
$about_subtitle = "Our Identity";
$about_title_main = "Trusted NDIS Support for";
$about_title_highlight = "Everyday Life";
$about_mission_part1 = "Ozland Care is built on the values of respect, dignity and independence. We provide professional, person-centred support that helps people live with confidence and freedom. Our caring and experienced team delivers high-quality NDIS services with kindness and understanding. We focus on your goals and create support that fits your needs and lifestyle.";
$about_mission_part2 = "At Ozland Care, we are more than a service provider. We are your trusted partner on your NDIS journey. Our team offers clear guidance, reliable support and practical help so you can achieve the outcomes that matter most to you.";
$values = [
    [
        'title' => 'Transparent Care',
        'desc'  => 'We always act with honesty and openness. Every decision we make is focused on what is best for you and your well-being.',
        'icon'  => 'fas fa-shield-heart'
    ],
    [
        'title' => 'Skilled Team',
        'desc'  => 'Our team includes trained and experienced professionals who provide safe, reliable and high-quality support based on proven care practices.',
        'icon'  => 'fas fa-user-nurse'
    ],
    [
        'title' => 'Working Together',
        'desc'  => 'We work closely with families, health professionals and the NDIS to make sure you receive the support you need for a smooth and positive journey.',
        'icon'  => 'fas fa-people-group'
    ]
];
?>

<section class="py-10 lg:py-20 bg-white relative overflow-hidden">
    <div class="absolute top-0 right-0 w-1/2 h-full bg-slate-50/50 -skew-x-12 translate-x-1/4 pointer-events-none"></div>

    <div class="container mx-auto px-6 relative z-10">
        <div class="flex flex-col lg:flex-row gap-12 lg:gap-20 items-start">

            <div class="w-full lg:w-1/2">
                <div class="inline-flex items-center gap-4 mb-6 sm:mb-8">
                    <span class="text-[10px] font-bold tracking-[0.4em] text-primary uppercase italic"><?php echo esc_html($about_subtitle); ?></span>
                    <div class="h-[1px] w-20 bg-primary/20"></div>
                </div>

                <h2 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-semibold text-slate-900 leading-[1.1] mb-7 sm:mb-10 tracking-tighter">
                    <?php echo esc_html($about_title_main); ?>
                    <span class="italic text-primary"><?php echo esc_html($about_title_highlight); ?></span>
                </h2>

                <p class="text-base sm:text-lg text-slate-950 font-normal leading-relaxed mb-5">
                    <?php echo esc_html($about_mission_part1); ?>
                </p>

                <p class="text-base sm:text-lg text-slate-950 font-normal leading-relaxed mb-5">
                    <?php echo esc_html($about_mission_part2); ?>
                </p>
            </div>

            <div class="w-full lg:w-1/2 grid grid-cols-1 gap-6">
                <?php foreach ($values as $value) : ?>
                    <div class="group relative flex flex-col sm:flex-row items-start sm:items-center gap-5 sm:gap-6 lg:gap-8 p-5 sm:p-6 lg:p-8 bg-white border border-slate-100 rounded-2xl lg:rounded-3xl transition-all duration-500 hover:shadow-[0_30px_60px_rgba(15,23,42,0.05)] hover:border-primary/20 overflow-hidden">

                        <div class="flex-shrink-0 w-16 h-16 lg:w-20 lg:h-20 rounded-2xl bg-slate-50 flex items-center justify-center transition-all duration-500 group-hover:bg-primary group-hover:scale-110 shadow-inner">
                            <i class="<?php echo $value['icon']; ?> text-2xl lg:text-3xl text-primary group-hover:text-white transition-colors"></i>
                        </div>

                        <div class="relative z-10 w-full sm:flex-1">
                            <h3 class="text-xl lg:text-2xl font-bold text-slate-900 mb-2 tracking-tight"><?php echo $value['title']; ?></h3>
                            <p class="w-full lg:max-w-sm text-slate-900 text-[16px] leading-relaxed">
                                <?php echo $value['desc']; ?>
                            </p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>


<!-- Our Values Section Started -->
<section class="relative py-10 lg:pt-10 lg:pb-20 overflow-hidden bg-white">

    <div class="absolute inset-0 z-0 pointer-events-none">
        <div class="absolute top-0 left-1/4 w-96 h-96 bg-blue-50 rounded-full blur-[100px] opacity-60"></div>
        <div class="absolute bottom-0 right-1/4 w-96 h-96 bg-slate-100 rounded-full blur-[100px] opacity-60"></div>
    </div>

    <div class="relative z-10 container mx-auto px-6 lg:px-10">

        <div class="text-center mb-10">
            <h2 class="text-4xl lg:text-5xl font-bold text-[#0f172a] mb-6 tracking-tight">Our Values</h2>
            <p class="text-slate-950 text-lg max-w-3xl mx-auto leading-relaxed">
                We believe good care starts with kindness, honesty and respect. These values guide how we support every person and family we work with.
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 2xl:grid-cols-5 gap-5">

            <?php
            $values = [
                [
                    'title' => 'Integrity',
                    'desc'  => 'We believe in openness, honesty and demonstrate strong moral principles. By doing the right thing, even when no one is watching!',
                    'icon'  => 'fas fa-shield-alt'
                ],
                [
                    'title' => 'Respect',
                    'desc'  => 'We are open to everyone’s unique ideas, beliefs, cultures, and personal situations.',
                    'icon'  => 'fas fa-hands-holding'
                ],
                [
                    'title' => 'Accountability',
                    'desc'  => 'We proudly deliver our services and take responsibility for our actions. We learn from our experience and improve.',
                    'icon'  => 'fas fa-clipboard-check'
                ],
                [
                    'title' => 'Trust',
                    'desc'  => 'We build a healthy relationship, where everyone can have confidence, trust, and feel safe around each other, physically and emotionally.',
                    'icon'  => 'fas fa-handshake'
                ],
                [
                    'title' => 'Empowerment',
                    'desc'  => 'We listen and work on your interests and strengths to give you choice and control, so you can make your own decisions around your support and other aspects of your care.',
                    'icon'  => 'fas fa-fist-raised'
                ],
            ];
            ?>

            <?php foreach ($values as $i => $v): ?>
                <div class="group relative bg-gray-50 rounded-[2rem] p-10 transition-all duration-500 hover:bg-white hover:shadow-[0_30px_60px_-15px_rgba(13,148,136,0.15)] overflow-hidden shadow-md">

                    <!-- Background Icon -->
                    <div class="absolute -top-6 -right-6 text-primary/5 group-hover:text-primary/10 transition-colors">
                        <i class="<?= $v['icon'] ?> text-9xl"></i>
                    </div>

                    <!-- Main Icon -->
                    <div class="w-14 h-14 bg-white rounded-2xl flex items-center justify-center mb-10 shadow-sm group-hover:shadow-primary/10 group-hover:bg-primary transition-all duration-300">
                        <i class="<?= $v['icon'] ?> text-primary group-hover:text-white text-3xl"></i>
                    </div>

                    <!-- Title -->
                    <h4 class="text-xl font-bold text-gray-900 mb-4">
                        <?= esc_html($v['title']) ?>
                    </h4>

                    <!-- Description -->
                    <p class="text-slate-950 leading-relaxed text-sm font-medium">
                        <?= esc_html($v['desc']) ?>
                    </p>

                </div>
            <?php endforeach; ?>

        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const cards = document.querySelectorAll('[data-value-card]');
        const observer = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    const delay = parseInt(entry.target.dataset.delay) || 0;
                    setTimeout(() => {
                        entry.target.style.opacity = '1';
                        entry.target.style.transform = 'translateY(0)';
                    }, delay);
                    observer.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.1
        });

        cards.forEach(card => observer.observe(card));
    });
</script>
<!-- Our Values Section Ended -->


<!-- Service Section Started -->
<?php
$services = [
    [
        'image_url'   => get_template_directory_uri() . '/assets/images/services/ndis-support-coordination.jpg',
        'title'       => 'NDIS Support Coordination',
        'description' => 'Guidance to help participants understand and implement their NDIS plans, connect with providers, and achieve their goals.',
        'href'        => site_url('/ndis-support-coordination/')
    ],
    [
        'image_url'   => get_template_directory_uri() . '/assets/images/services/assist-daily-tasks-or-shared-living.jpg',
        'title'       => 'SIL Supported Independent Living',
        'description' => 'Support with daily living tasks within shared or individual living spaces to promote independence.',
        'href'        => site_url('/assist-daily-tasks-shared-living/')
    ],
    [
        'image_url'   => get_template_directory_uri() . '/assets/images/services/innovative-community-participation.jpg',
        'title'       => 'Community Participation',
        'description' => 'Engaging and creative programs that foster active involvement in community, social, and civic life.',
        'href'        => site_url('/innovative-community-participation/')
    ],
    [
        'image_url'   => get_template_directory_uri() . '/assets/images/services/assist-personal-activities.jpg',
        'title'       => 'Personal Activities',
        'description' => 'Help with daily personal activities such as hygiene, grooming, and self-care to maintain wellbeing.',
        'href'        => site_url('/assist-personal-activities/')
    ],
    [
        'image_url'   => get_template_directory_uri() . '/assets/images/services/assist-traveltransport.jpg',
        'title'       => 'Transport',
        'description' => 'Safe, reliable transport solutions to attend appointments, community outings, and personal errands.',
        'href'        => site_url('/assist-travel-transport/')
    ],
    [
        'image_url'   => get_template_directory_uri() . '/assets/images/services/assistance-with-social-and-community-participation.jpg',
        'title'       => 'Assistance with Social and Community Participation',
        'description' => 'Support to engage in community, social, and recreational activities, helping participants build connections and confidence.',
        'href'        => site_url('/assistance-with-social-and-community-participation/')
    ],
    [
        'image_url'   => get_template_directory_uri() . '/assets/images/services/daily-personal-care.jpg',
        'title'       => 'Daily Personal Care',
        'description' => 'Assistance with everyday personal care tasks, including showering, dressing, grooming, and maintaining personal hygiene.',
        'href'        => site_url('/daily-personal-care/')
    ],
    [
        'image_url'   => get_template_directory_uri() . '/assets/images/services/home-modification-design-and-construction.jpg',
        'title'       => 'Home Modification Design & Construction',
        'description' => 'Tailored home modification design and construction to enhance accessibility and independence.',
        'href'        => site_url('/home-modification-design-construction/')
    ],
    [
        'image_url'   => get_template_directory_uri() . '/assets/images/services/development-of-daily-living-and-life-skills.jpg',
        'title'       => 'Development of Daily Living & Life Skills',
        'description' => 'Personalised coaching and support to build practical life skills and enhance self-reliance.',
        'href'        => site_url('/development-of-daily-living-life-skills/')
    ],
    [
        'image_url'   => get_template_directory_uri() . '/assets/images/services/household-tasks.jpg',
        'title'       => 'Household Tasks',
        'description' => 'Assistance with cleaning, laundry, meal preparation, and daily household responsibilities.',
        'href'        => site_url('/household-tasks/')
    ],
    [
        'image_url'   => get_template_directory_uri() . '/assets/images/services/participation-in-community-social-and-civic-activities.jpg',
        'title'       => 'Participation in Community, Social & Civic Activities',
        'description' => 'Opportunities to engage in meaningful social, civic, and community experiences.',
        'href'        => site_url('/participation-in-community-social-civic-activities/')
    ],
    [
        'image_url'   => get_template_directory_uri() . '/assets/images/services/specialised-driver-training.jpg',
        'title'       => 'Specialised driver training',
        'description' => 'Structured training to build safe driving skills and confidence behind the wheel.',
        'href'        => site_url('/specialised-driver-training/')
    ],
    [
        'image_url'   => get_template_directory_uri() . '/assets/images/services/group-or-centre-based-activities.jpg',
        'title'       => 'Group/Centre-Based Activities',
        'description' => 'Facilitated group activities and centre-based programs that encourage social connections and learning.',
        'href'        => site_url('/group-centre-based-activities/')
    ]
];
?>

<style>
    .no-scrollbar::-webkit-scrollbar {
        display: none;
    }

    .no-scrollbar {
        -ms-overflow-style: none;
        scrollbar-width: none;
    }

    /* Smooth scrolling for the container */
    #service-slider {
        scroll-behavior: smooth;
    }
</style>

<section class="relative bg-white overflow-hidden">
    <div class="absolute top-0 w-full h-[400px] bg-blue z-0"></div>

    <div class="container mx-auto px-6 xl:px-0 pt-20 pb-20 relative z-10">

        <div class="text-center mb-16">
            <h2 class="text-4xl xl:text-5xl font-bold text-white mb-4 tracking-tight">Our Services</h2>
            <div class="w-20 h-1 bg-orange-400 mx-auto rounded-full"></div>
        </div>

        <div id="service-slider" class="flex overflow-x-auto no-scrollbar gap-5 pb-10 snap-x snap-mandatory">
            <?php foreach ($services as $service) : ?>
                <div class="flex-shrink-0 w-full md:w-[calc(50%-0.625rem)] xl:w-[calc(25%-15px)] snap-start group bg-white rounded-[2rem] shadow-lg overflow-hidden flex flex-col transition-all duration-500 hover:scale-[1.02] my-4">
                    <div class="p-2 pb-0">
                        <a href="<?php echo esc_url($service['href']); ?>" class="block">
                            <div class="relative h-72 md:h-96 xl:h-72 w-full rounded-[1.5rem] overflow-hidden">
                                <img src="<?php echo esc_url($service['image_url']); ?>"
                                    class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-110"
                                    alt="<?php echo esc_attr($service['title']); ?>">
                                <div class="absolute inset-0 bg-black/10"></div>
                            </div>
                        </a>
                    </div>

                    <div class="p-10 pt-4 flex flex-col items-center text-center flex-1">
                        <a href="<?php echo esc_url($service['href']); ?>" class="inline-block">
                            <h3 class="text-2xl font-bold text-slate-900 mb-4 tracking-tight hover:text-blue transition-colors duration-300">
                                <?php echo esc_html($service['title']); ?>
                            </h3>
                        </a>

                        <p class="text-slate-900 text-base leading-relaxed mb-5 min-h-[4.5rem]">
                            <?php echo esc_html($service['description']); ?>
                        </p>
                        <a href="<?php echo esc_url($service['href']); ?>"
                            class="mt-auto inline-flex items-center justify-center gap-3 w-full py-3 bg-primary hover:bg-blue text-white font-bold rounded-2xl transition-all duration-300 shadow-lg">
                            View Details
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                            </svg>
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="flex justify-center items-center gap-4 mt-5">
            <button onclick="scrollSlider('left')" class="p-4 rounded-full bg-slate-100 text-slate-800 hover:bg-blue hover:text-white transition-all duration-300 shadow-md group">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
            </button>

            <button onclick="scrollSlider('right')" class="p-4 rounded-full bg-slate-100 text-slate-800 hover:bg-blue hover:text-white transition-all duration-300 shadow-md group">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
            </button>
        </div>
    </div>
</section>

<script>
    function scrollSlider(direction) {
        const slider = document.getElementById('service-slider');
        // Calculate scroll distance based on one card width
        const scrollAmount = slider.clientWidth;

        if (direction === 'left') {
            slider.scrollBy({
                left: -scrollAmount,
                behavior: 'smooth'
            });
        } else {
            slider.scrollBy({
                left: scrollAmount,
                behavior: 'smooth'
            });
        }
    }
</script>
<!-- Service Section Ended -->


<!-- Who We Support Section Started -->
<?php
$section_title = "Who We Support";
$section_desc  = "We support individuals in Sydney with a wide range of disabilities and health conditions, including psychosocial, neurological, physical, intellectual, developmental, and sensory disabilities, as well as other complex support needs. Our services are tailored to meet each person’s unique goals and support requirements.";

$cards = [
    [
        'title' => 'Psychological',
        'desc'  => 'Compassionate support for psychological wellbeing with tailored care strategies.',
        'icon'  => 'M12 21a9 9 0 100-18 9 9 0 000 18zm0-13v5l3 3',
        'img'   => get_template_directory_uri() . '/assets/images/psychological-support.jpg',
    ],
    [
        'title' => 'Physical',
        'desc'  => 'Support to improve mobility, independence and daily living skills.',
        'icon'  => 'M13 10V3L4 14h7v7l9-11h-7z',
        'img'   => get_template_directory_uri() . '/assets/images/physical-support.jpg',
    ],
    [
        'title' => 'Intellectual',
        'desc'  => 'Building life skills, confidence and community participation.',
        'icon'  => 'M9.75 3a.75.75 0 000 1.5h4.19l-6.72 6.72a.75.75 0 101.06 1.06l6.72-6.72V15a.75.75 0 001.5 0V3h-7.75z',
        'img'   => get_template_directory_uri() . '/assets/images/intellectual-support.jpg',
    ],
    [
        'title' => 'NDIS & Private Clients',
        'desc'  => 'Registered coordination and private lifestyle support services.',
        'icon'  => 'M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-7.714 2.143',
        'img'   => get_template_directory_uri() . '/assets/images/ndis-and-private-clients.jpg',
    ],
];
?>

<section class="relative py-10 lg:py-20 bg-blue overflow-hidden">

    <div class="absolute inset-0 z-0">
        <!-- Main blended glow -->
        <div class="absolute inset-0 bg-[radial-gradient(ellipse_80%_60%_at_50%_-20%,rgba(111,44,145,0.25),transparent)]"></div>

        <!-- Secondary blue glow -->
        <div class="absolute inset-0 bg-[radial-gradient(ellipse_60%_40%_at_85%_85%,rgba(0,174,239,0.18),transparent)]"></div>

        <!-- Subtle purple-blue blend -->
        <div class="absolute inset-0 bg-[radial-gradient(ellipse_40%_30%_at_20%_70%,rgba(111,44,145,0.12),transparent)]"></div>

        <!-- Grid texture -->
        <div class="absolute inset-0" style="background-image: radial-gradient(rgba(255,255,255,0.03) 1px, transparent 1px); background-size: 32px 32px;"></div>

        <!-- Premium top line -->
        <div class="absolute top-0 left-0 right-0 h-px bg-gradient-to-r from-transparent via-[#6F2C91]/50 via-[#00AEEF]/40 to-transparent"></div>
    </div>

    <div class="relative z-10 max-w-[95rem] mx-auto px-6 lg:px-10 xl:px-0">

        <div class="mb-14 max-w-5xl">
            <div class="inline-flex items-center gap-4 mb-8">
                <span class="text-[10px] font-bold tracking-[0.4em] text-white/80 uppercase italic">Our Community</span>
                <div class="h-[1px] w-20 bg-white/80"></div>
            </div>

            <h2 class="text-4xl lg:text-5xl font-bold text-white tracking-tight leading-[1.1] mb-6">
                <?= esc_html($section_title) ?>
            </h2>

            <p class="text-white text-lg leading-relaxed font-medium max-w-5xl">
                <?= esc_html($section_desc) ?>
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-5">
            <?php foreach ($cards as $i => $card): ?>
                <div class="group relative flex flex-col rounded-2xl overflow-hidden bg-white backdrop-blur-sm shadow-lg shadow-black/30 transition-all duration-500 hover:-translate-y-2 hover:border hover:border-[#6F2C91]/60 hover:shadow-[0_25px_70px_-10px_rgba(111,44,145,0.45)]">

                    <div class="relative h-60 overflow-hidden">
                        <img
                            src="<?= $card['img'] ?>"
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105"
                            alt="<?= esc_attr($card['title']) ?>">

                        <!-- Overlay gradient (NDIS blend) -->
                        <div class="absolute inset-0 bg-gradient-to-t from-[#030711]/40 via-[#6F2C91]/10 to-transparent"></div>
                        <div class="absolute inset-0 bg-gradient-to-b from-black/30 to-transparent"></div>
                    </div>

                    <div class="flex-1 flex flex-col p-6 lg:p-8 pt-5">

                        <!-- Accent line (NDIS gradient) -->
                        <div class="w-8 h-[2px] bg-gradient-to-r from-[#6F2C91] via-[#00AEEF] to-transparent mb-4 transition-all duration-500 group-hover:w-16"></div>

                        <h3 class="text-xl font-semibold text-slate-900 leading-snug mb-3 group-hover:text-blue transition-colors duration-300">
                            <?= esc_html($card['title']) ?>
                        </h3>

                        <p class="text-black text-sm leading-relaxed flex-1 group-hover:text-slate-950 transition-colors duration-300">
                            <?= esc_html($card['desc']) ?>
                        </p>

                    </div>

                    <!-- Bottom animated glow -->
                    <div class="absolute bottom-0 left-0 right-0 h-px bg-gradient-to-r from-transparent via-[#6F2C91]/60 via-[#00AEEF]/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>

                    <!-- Corner highlight -->
                    <div class="absolute top-0 left-0 w-12 h-12 opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                        <div class="absolute top-0 left-0 w-full h-px bg-gradient-to-r from-[#6F2C91] to-transparent"></div>
                        <div class="absolute top-0 left-0 h-full w-px bg-gradient-to-b from-[#00AEEF] to-transparent"></div>
                    </div>

                </div>
            <?php endforeach; ?>
        </div>

    </div>
</section>
<!-- Who We Support Section Ended -->


<!-- Testimonials Section Started -->
<?php
// Testimonials Data
$testimonials_subtitle = "Client Testimonials";
$testimonials_title = "Voices of <span class='font-serif italic text-blue-600'>Trust</span>";
$testimonials_desc = "Real feedback from participants and families who trust Ozland Care for their support.";

$testimonials = [
    [
        'name'     => 'Jackie Smith',
        'role'     => 'Carer',
        'quote'    => "Providing good service. The support worker was absolutely good and very punctual and get me out of bed in time too. I'm very happy and would like to continue the service with Ozland Care",
        'initials' => 'JS',
    ],
    [
        'name'     => 'Abeda',
        'role'     => 'Local Guide',
        'quote'    => "I really can’t speak highly enough of Majid and Ozland Care. The service provided is of high quality and standard, and the team always goes the extra mile to ensure client satisfaction. I am so grateful to have Majid working with my brother as I am confident he is in good hands, and is being treated fairly and respectfully, and with genuine care. I would not hesitate in recommending Majid and the team at Ozland Care.",
        'initials' => 'A',
    ],
    [
        'name'     => 'Scott Turner',
        'role'     => 'NDIS Participant',
        'quote'    => 'I have been with Oz land care from late last year. I have found Majid and his staff very helpful and respectful. My personal development aspect,I feel has improved by their help.My personal development has improved also by their help.I highly recommend this provider to all genuinely looking for their needs to be met Regards Scott Turner',
        'initials' => 'ST',
    ],
    [
        'name'     => 'Azzam Siddiqui',
        'role'     => 'Local Guide',
        'quote'    => "Majid provided me with the full range of supports. I had a lot of trouble trying to understand how to use the NDIS funding appropriately and he went above and beyond in his service. Can't recommend him enough. It's very easy to be confused and get taken advantage of within the NDIS labyrinth but I can definitely trust that Majid and his team always do the right thing.",
        'initials' => 'AS',
    ],
    [
        'name'     => 'Basima Ghanem',
        'role'     => 'NDIS Participant',
        'quote'    => 'We are very happy to be with Ozlandcare they take their work with strong commitment and respect I would highly recommend Ozlandcare to anyone looking for a provider',
        'initials' => 'BG',
    ],
];
?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

<style>
    /* Force Swiper slides to match the height of the tallest card */
    .swiper-wrapper {
        display: flex;
        align-items: stretch;
        /* This ensures all slides are the same height */
    }

    .swiper-slide {
        height: auto;
        /* Required for 'stretch' to work */
        display: flex;
    }

    .testimonial-swiper {
        padding: 40px 0 70px !important;
    }

    /* Custom Dot Styling */
    .swiper-pagination-bullet {
        background: #6F2C91;
        opacity: 0.3;
    }

    .swiper-pagination-bullet-active {
        background: #6F2C91 !important;
        width: 24px !important;
        /* Elongated active dot */
        border-radius: 12px !important;
        opacity: 1;
    }
</style>

<section class="relative py-10 lg:py-20 bg-white overflow-hidden">
    <div class="absolute inset-0 z-0 pointer-events-none">
        <div class="absolute top-0 left-1/2 -translate-x-1/2 w-full h-full opacity-[0.03]" style="background-image: radial-gradient(#000 1px, transparent 1px); background-size: 40px 40px;"></div>
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[800px] h-[800px] bg-[#F3E8FA] rounded-full blur-[120px]"></div>
    </div>

    <div class="relative z-10 container max-w-7xl mx-auto px-6 xl:px-0">
        <div class="text-center mb-5">
            <h2 class="text-4xl lg:text-5xl font-bold text-slate-900 mb-6 tracking-tight">
                What Do Our <span class="italic font-serif text-[#6F2C91]">Client's Say?</span>
            </h2>
            <p class="text-slate-950 text-lg max-w-3xl mx-auto leading-relaxed">
                Real stories from participants and families whose lives have been transformed by our care.
            </p>
        </div>

        <div class="swiper testimonial-swiper">
            <div class="swiper-wrapper">
                <?php foreach ($testimonials as $t): ?>
                    <div class="swiper-slide">
                        <div class="group relative flex flex-col flex-1 h-full p-8 lg:p-10 rounded-2xl bg-primary transition-all duration-500 hover:-translate-y-2">

                            <div class="mb-6">
                                <svg class="w-10 h-10 text-blue opacity-90" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M14.017 21L14.017 18C14.017 14.686 16.703 12 20 12L20 10C16.134 10 13 13.134 13 17L13 21H14.017ZM3.017 21H4.017L4.017 18C4.017 14.686 6.703 12 10 12L10 10C6.134 10 3 13.134 3 17L3 21Z" />
                                </svg>
                            </div>

                            <div class="flex-grow">
                                <p class="text-white/90 text-base leading-relaxed font-medium mb-4">
                                    "<?= htmlspecialchars($t['quote']) ?>"
                                </p>
                            </div>

                            <div class="flex items-center gap-4 pt-6 border-t border-white/10">
                                <div class="w-12 h-12 flex-shrink-0 rounded-full overflow-hidden border-2 border-white/20">
                                    <div class="w-full h-full bg-gradient-to-br from-[#6F2C91] to-[#00AEEF] flex items-center justify-center text-white text-xs font-bold">
                                        <?= $t['initials'] ?>
                                    </div>
                                </div>
                                <div>
                                    <h4 class="text-white font-bold text-base leading-none mb-1">
                                        <?= htmlspecialchars($t['name']) ?>
                                    </h4>

                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        new Swiper('.testimonial-swiper', {
            slidesPerView: 1,
            spaceBetween: 24,
            loop: true,
            // Essential for equal height slides
            autoHeight: false,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            breakpoints: {
                768: {
                    slidesPerView: 2,
                },
                1280: {
                    slidesPerView: 3,
                }
            }
        });
    });
</script>
<!-- Testimonials Section Ended -->


<?php
// ── Config (same as before) ──────────────────────────────────────────────────
$process_subtitle    = "Getting Started";
$process_title_main  = "How Our";
$process_title_gradient = "Process Works";
$process_description = "Simple steps to help you get the support you need.";

$steps = [
    [
        'title' => 'First Chat',
        'desc'  => ' We talk about your needs and goals.',
        'icon'  => 'M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z'
    ],
    [
        'title' => 'Plan Review',
        'desc'  => 'We look at your NDIS plan and funding.',
        'icon'  => 'M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z'
    ],
    [
        'title' => 'Set Up Support',
        'desc'  => 'We arrange services that fit your needs.',
        'icon'  => 'M11 4a2 2 0 114 0v1a1 1 0 001 1h3a1 1 0 011 1v3a1 1 0 01-1 1h-1a2 2 0 100 4h1a1 1 0 011 1v3a1 1 0 01-1 1h-3a1 1 0 01-1-1v-1a2 2 0 10-4 0v1a1 1 0 01-1 1H7a1 1 0 01-1-1v-3a1 1 0 00-1-1H4a2 2 0 110-4h1a1 1 0 001-1V7a1 1 0 011-1h3a1 1 0 001-1V4z'
    ],
    [
        'title' => 'Ongoing Support',
        'desc'  => ' We check in regularly and adjust support if needed.',
        'icon'  => 'M9 12l2 2 4-4m5.618-4.016A3.323 3.323 0 0010.605 8.533a3.323 3.323 0 00-4.589 4.589L12 21.382l5.984-8.26a3.323 3.323 0 00-2.366-5.138z'
    ],
];
?>





<!-- Faq Section -->
<!-- FAQ Section -->
<?php

$faq_title = "Frequently Asked Questions (FAQs)";

$faqs = [
    [
        'q' => 'What is NDIS?',
        'a' => 'The National Disability Insurance Scheme provides personalised funding for eligible Australians with permanent, significant disability.'
    ],
    [
        'q' => 'How do I apply for NDIS?',
        'a' => 'Contact the NDIA directly or speak with our team who can guide you through the application process and gathering required evidence.'
    ],
    [
        'q' => 'Are you NDIS registered?',
        'a' => 'Yes, we are fully NDIS registered and compliant with all quality standards and requirements set by the NDIS Quality and Safeguards Commission.'
    ],
    [
        'q' => 'What services do you offer?',
        'a' => 'We offer personal care, community support, skill development, employment support, respite care, and support coordination.'
    ],
    [
        'q' => 'Can I change my provider at any time?',
        'a' => 'Yes. Under NDIS, you have choice and control. You can switch providers as long as you meet the notice periods outlined in your service agreement.'
    ],
];

?>

<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>


<section class="faq-premium-section relative overflow-hidden bg-white">

    <!-- =========================================================
         BLUE TITLE AREA
    ========================================================== -->
    <div class="relative bg-blue pt-14 pb-24 md:pt-20 md:pb-32 lg:pt-20 lg:pb-36">

        <!-- Subtle dotted decoration -->
        <div
            class="absolute left-[6%] bottom-8 w-36 h-36 opacity-[0.055]"
            style="
                background-image: radial-gradient(#ffffff 1.5px, transparent 1.5px);
                background-size: 16px 16px;
            "
            aria-hidden="true">
        </div>


        <div class="container mx-auto max-w-7xl px-6 lg:px-10 xl:px-0 relative z-10">

            <div class="max-w-5xl">

                <!-- Eyebrow -->
                <div class="flex items-center gap-3 mb-4">

                    <span
                        class="text-[10px] font-bold tracking-[0.4em] text-white/80 uppercase italic">
                        Reliability & Trust
                    </span>

                    <span class="h-[1px] w-20 bg-white/80"></span>

                </div>


                <!-- Heading -->
                <h2
                    class="text-4xl md:text-5xl lg:text-5xl font-bold text-white tracking-tight leading-[1.1] m-0">

                    Frequently Asked

                    <span class="text-primary">
                        Questions (FAQs)
                    </span>

                </h2>

            </div>

        </div>

    </div>


    <!-- =========================================================
         WHITE CONTENT AREA
    ========================================================== -->
    <div class="relative bg-white pb-16 md:pb-20 lg:pb-24">

        <div class="container mx-auto max-w-7xl px-6 lg:px-10 xl:px-0 relative z-10">

            <div
                class="grid grid-cols-1 lg:grid-cols-[minmax(0,0.92fr)_minmax(0,1fr)] gap-12 lg:gap-14 xl:gap-16 items-stretch">


                <!-- =================================================
                     LEFT IMAGE
                ================================================== -->
                <div
                    class="relative -mt-14 md:-mt-20 lg:-mt-24">


                    <!-- Blurred purple background shape -->
                    <div
                        class="faq-blob absolute -top-8 -left-10 w-64 h-64 bg-primary/[0.08] rounded-full blur-3xl opacity-80"
                        aria-hidden="true">
                    </div>


                    <!-- Soft neutral bottom shape -->
                    <div
                        class="faq-blob faq-blob-delay absolute -bottom-10 -right-10 w-64 h-64 bg-slate-100 rounded-full blur-3xl opacity-90"
                        aria-hidden="true">
                    </div>


                    <div class="relative">

                        <!-- Rotated primary square -->
                        <div
                            class="absolute -top-5 -right-5 md:-top-6 md:-right-6 w-20 h-20 md:w-24 md:h-24 bg-primary rounded-[1.5rem] md:rounded-3xl -z-10 rotate-12"
                            aria-hidden="true">
                        </div>


                        <!-- Outlined circle -->
                        <div
                            class="absolute -bottom-5 -left-5 md:-bottom-6 md:-left-6 w-24 h-24 md:w-32 md:h-32 border-[3px] md:border-4 border-primary/10 rounded-full -z-10"
                            aria-hidden="true">
                        </div>


                        <!-- Dotted pattern -->
                        <div
                            class="absolute top-1/2 -translate-y-1/2 -right-7 md:-right-10 lg:-right-12 w-20 md:w-24 h-44 md:h-48 opacity-[0.13] -z-10"
                            style="
                                background-image: radial-gradient(#5f2a7d 2px, transparent 2px);
                                background-size: 15px 15px;
                            "
                            aria-hidden="true">
                        </div>


                        <!-- Image frame -->
                        <div
                            class="relative z-10 rounded-[2rem] md:rounded-[3rem] overflow-hidden border-[8px] md:border-[12px] border-white shadow-2xl shadow-slate-300/70
                                   lg:min-h-[570px] xl:min-h-[600px] 2xl:min-h-[630px]">

                            <img
                                src="<?php echo esc_url(
                                            get_template_directory_uri() .
                                                '/assets/images/get-the-clarity-you-deserve.jpg'
                                        ); ?>"
                                alt="Ozland Care support coordinator helping with NDIS questions"
                                loading="lazy"
                                decoding="async"
                                class="w-full h-[320px] md:h-[520px] lg:h-[570px] xl:h-[600px] 2xl:h-[630px] object-cover">

                        </div>

                    </div>

                </div>


                <!-- =================================================
                     RIGHT FAQ ACCORDION
                     Starts entirely on white background
                ================================================== -->
                <div
                    class="w-full pt-2 lg:pt-10 xl:pt-12"
                    x-data="{ active: null }">


                    <div class="flex flex-col gap-3 md:gap-4">

                        <?php foreach ($faqs as $idx => $item): ?>

                            <div
                                class="faq-card bg-white border rounded-2xl overflow-hidden transition-all duration-300"
                                :class="
                                    active === <?php echo $idx; ?>
                                    ? 'border-blue shadow-xl shadow-blue/10'
                                    : 'border-slate-200 shadow-md hover:border-blue/40'
                                ">


                                <!-- FAQ Header -->
                                <button
                                    type="button"
                                    @click="
                                        active !== <?php echo $idx; ?>
                                        ? active = <?php echo $idx; ?>
                                        : active = null
                                    "
                                    class="w-full flex items-center justify-between gap-5 px-5 py-4 md:px-7 md:py-5 text-left outline-none group">


                                    <!-- Question -->
                                    <span
                                        class="text-[15px] md:text-[17px] font-bold leading-snug tracking-[-0.01em] transition-colors duration-300"
                                        :class="
                                            active === <?php echo $idx; ?>
                                            ? 'text-blue'
                                            : 'text-slate-950 group-hover:text-blue'
                                        ">

                                        <?php echo esc_html($item['q']); ?>

                                    </span>


                                    <!-- Icon -->
                                    <span
                                        class="flex-shrink-0 w-10 h-10 md:w-11 md:h-11 flex items-center justify-center rounded-full border transition-all duration-300"
                                        :class="
                                            active === <?php echo $idx; ?>
                                            ? 'bg-blue border-blue text-white shadow-lg shadow-blue/20'
                                            : 'bg-slate-50 border-slate-200 text-slate-500 group-hover:border-blue group-hover:text-blue'
                                        ">

                                        <svg
                                            class="w-4 h-4 transition-transform duration-300"
                                            :class="
                                                active === <?php echo $idx; ?>
                                                ? 'rotate-180'
                                                : ''
                                            "
                                            fill="none"
                                            stroke="currentColor"
                                            viewBox="0 0 24 24"
                                            aria-hidden="true">

                                            <path
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                stroke-width="2"
                                                d="M19 9l-7 7-7-7">
                                            </path>

                                        </svg>

                                    </span>

                                </button>


                                <!-- FAQ Answer -->
                                <div
                                    x-show="active === <?php echo $idx; ?>"
                                    x-cloak
                                    x-transition:enter="transition ease-out duration-300"
                                    x-transition:enter-start="opacity-0 -translate-y-1"
                                    x-transition:enter-end="opacity-100 translate-y-0"
                                    x-transition:leave="transition ease-in duration-200"
                                    x-transition:leave-start="opacity-100 translate-y-0"
                                    x-transition:leave-end="opacity-0 -translate-y-1">


                                    <div
                                        class="border-t border-slate-100 px-5 md:px-7 pt-5 pb-6 md:pb-7">

                                        <p
                                            class="m-0 text-slate-950 text-[15px] md:text-base leading-[1.75] font-medium">

                                            <?php echo esc_html($item['a']); ?>

                                        </p>

                                    </div>

                                </div>

                            </div>

                        <?php endforeach; ?>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


<style>
    [x-cloak] {
        display: none !important;
    }


    /* =========================================================
       IMAGE BACKGROUND SHAPE ANIMATION
    ========================================================== */

    @keyframes faqBlobAnimation {

        0% {
            transform: translate(0, 0) scale(1);
        }

        33% {
            transform: translate(20px, -28px) scale(1.06);
        }

        66% {
            transform: translate(-14px, 15px) scale(0.96);
        }

        100% {
            transform: translate(0, 0) scale(1);
        }

    }


    .faq-blob {
        animation: faqBlobAnimation 8s infinite ease-in-out;
    }


    .faq-blob-delay {
        animation-delay: 2s;
    }


    /* =========================================================
       FAQ CARD
    ========================================================== */

    .faq-card {
        will-change: box-shadow, border-color;
    }


    .faq-premium-section {
        isolation: isolate;
    }


    /* =========================================================
       MOBILE
    ========================================================== */

    @media (max-width: 767px) {

        .faq-blob {
            width: 180px;
            height: 180px;
        }

    }


    /* =========================================================
       REDUCED MOTION
    ========================================================== */

    @media (prefers-reduced-motion: reduce) {

        .faq-blob {
            animation: none;
        }

    }
</style>

<?php get_template_part('template-parts/content', 'cta'); ?>

<?php
get_footer();
