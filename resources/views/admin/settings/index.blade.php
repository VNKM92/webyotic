@extends('layouts.admin')

@section('header')
    Settings
@endsection

@section('content')
    @php
        $get = fn($key, $default = '') => $settings->flatten()->where('key', $key)->first()->value ?? $default;
    @endphp

    <div class="bg-white rounded-lg shadow overflow-hidden">
        <div class="p-6">
            <form action="{{ route('admin.settings.update') }}" method="POST">
                @csrf
                
                <div x-data="{ activeTab: 'general' }">
                    <!-- Tabs -->
                    <div class="flex border-b border-gray-200 mb-6">
                        <button type="button" @click="activeTab = 'general'" :class="{'border-blue-500 text-blue-600': activeTab === 'general', 'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300': activeTab !== 'general'}" class="py-4 px-6 border-b-2 font-medium text-sm focus:outline-none">
                            General
                        </button>
                        <button type="button" @click="activeTab = 'home'" :class="{'border-blue-500 text-blue-600': activeTab === 'home', 'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300': activeTab !== 'home'}" class="py-4 px-6 border-b-2 font-medium text-sm focus:outline-none">
                            Home Page
                        </button>
                        <button type="button" @click="activeTab = 'seo'" :class="{'border-blue-500 text-blue-600': activeTab === 'seo', 'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300': activeTab !== 'seo'}" class="py-4 px-6 border-b-2 font-medium text-sm focus:outline-none">
                            Global SEO
                        </button>
                        <button type="button" @click="activeTab = 'theme'" :class="{'border-blue-500 text-blue-600': activeTab === 'theme', 'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300': activeTab !== 'theme'}" class="py-4 px-6 border-b-2 font-medium text-sm focus:outline-none">
                            Theme & Scripts
                        </button>
                    </div>

                    <!-- General Tab -->
                    <div x-show="activeTab === 'general'">
                        <div class="grid grid-cols-1 gap-6">
                            <div>
                                <label class="block text-sm font-medium text-gray-700">Site Name</label>
                                <input type="text" name="site_name" value="{{ $get('site_name', 'Webyotic') }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700">Footer Text</label>
                                <input type="text" name="footer_text" value="{{ $get('footer_text', '© 2025 Webyotic. All rights reserved.') }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700">Contact Email</label>
                                <input type="email" name="contact_email" value="{{ $get('contact_email', 'info@webyotic.com') }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700">Phone Number</label>
                                <input type="text" name="contact_phone" value="{{ $get('contact_phone', '+1 234 567 890') }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm">
                            </div>
                        </div>
                    </div>

                    <!-- Home Page Tab -->
                    <div x-show="activeTab === 'home'" style="display: none;">
                        <div class="grid grid-cols-1 gap-6">
                            <div>
                                <label class="block text-sm font-medium text-gray-700">Hero Title</label>
                                <input type="text" name="home_hero_title" value="{{ $get('home_hero_title') }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700">Hero Subtitle</label>
                                <input type="text" name="home_hero_subtitle" value="{{ $get('home_hero_subtitle') }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700">Hero Image URL</label>
                                <input type="text" name="home_hero_image" value="{{ $get('home_hero_image') }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm">
                            </div>
                        </div>
                    </div>

                    <!-- Global SEO Tab -->
                    <div x-show="activeTab === 'seo'" style="display: none;">
                        <div class="grid grid-cols-1 gap-6">
                            <div>
                                <label class="block text-sm font-medium text-gray-700">Default Meta Title</label>
                                <input type="text" name="default_seo_title" value="{{ $get('default_seo_title') }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700">Default Meta Description</label>
                                <textarea name="default_seo_description" rows="3" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm">{{ $get('default_seo_description') }}</textarea>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700">Default Keywords</label>
                                <input type="text" name="default_seo_keywords" value="{{ $get('default_seo_keywords') }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm">
                            </div>
                        </div>
                    </div>

                    <!-- Theme & Scripts Tab -->
                    <div x-show="activeTab === 'theme'" style="display: none;">
                        <div class="grid grid-cols-1 gap-6">
                            <div>
                                <label class="block text-sm font-medium text-gray-700">Custom CSS</label>
                                <textarea name="custom_css" rows="5" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm font-mono">{{ $get('custom_css') }}</textarea>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700">Custom JS (Header)</label>
                                <textarea name="custom_js_header" rows="5" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm font-mono">{{ $get('custom_js_header') }}</textarea>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700">Custom JS (Footer)</label>
                                <textarea name="custom_js_footer" rows="5" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm font-mono">{{ $get('custom_js_footer') }}</textarea>
                            </div>
                        </div>
                    </div>

                    <div class="mt-6">
                        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded shadow hover:bg-blue-700">
                            Save Settings
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
