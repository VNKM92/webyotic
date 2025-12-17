@extends('frontend.layouts.app')

@section('content')
<section class="bg-white dark:bg-gray-900">
    <div class="py-12 lg:py-20 px-4 mx-auto max-w-screen-xl">
        <div class="mx-auto max-w-screen-md text-center mb-10 lg:mb-16">
            <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-slate-900 dark:text-white">Contact Us</h2>
            <p class="mb-8 font-light text-slate-500 lg:mb-16 sm:text-xl dark:text-gray-400">Got a technical issue? Want to send feedback about a beta feature? Need details about our Business plan? Let us know.</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 lg:gap-16 items-start">
            
            <!-- Contact Info -->
            <div class="bg-slate-50 p-8 rounded-2xl border border-slate-100 dark:bg-gray-800 dark:border-gray-700">
                <h3 class="text-2xl font-bold text-slate-900 dark:text-white mb-6">Get in touch</h3>
                <div class="space-y-6">
                    <div class="flex items-start">
                         <div class="flex-shrink-0 w-12 h-12 bg-sky-100 rounded-lg flex items-center justify-center text-sky-600 dark:bg-sky-900 dark:text-sky-300">
                             <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                         </div>
                         <div class="ml-4">
                             <h4 class="text-lg font-semibold text-slate-900 dark:text-white">Visit us</h4>
                             <p class="mt-1 text-slate-500 dark:text-gray-400">123 SEO Street, Digital City, 10001</p>
                             <p class="text-slate-500 dark:text-gray-400">New York, USA</p>
                         </div>
                    </div>
                    
                    <div class="flex items-start">
                        <div class="flex-shrink-0 w-12 h-12 bg-orange-100 rounded-lg flex items-center justify-center text-orange-600 dark:bg-orange-900 dark:text-orange-300">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                        </div>
                        <div class="ml-4">
                            <h4 class="text-lg font-semibold text-slate-900 dark:text-white">Email us</h4>
                            <p class="mt-1 text-slate-500 dark:text-gray-400">info@webyotic.com</p>
                            <p class="text-slate-500 dark:text-gray-400">support@webyotic.com</p>
                        </div>
                   </div>

                   <div class="flex items-start">
                        <div class="flex-shrink-0 w-12 h-12 bg-sky-100 rounded-lg flex items-center justify-center text-sky-600 dark:bg-sky-900 dark:text-sky-300">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                        </div>
                        <div class="ml-4">
                            <h4 class="text-lg font-semibold text-slate-900 dark:text-white">Call us</h4>
                            <p class="mt-1 text-slate-500 dark:text-gray-400">+1 (555) 123-4567</p>
                            <p class="text-slate-500 dark:text-gray-400">Mon - Fri, 8am - 5pm</p>
                        </div>
                   </div>
                </div>
            </div>

            <!-- Contact Form -->
            <form action="#" class="space-y-6 bg-white p-2 dark:bg-gray-900">
                <div>
                    <label for="email" class="block mb-2 text-sm font-medium text-slate-900 dark:text-gray-300">Your email</label>
                    <input type="email" id="email" class="shadow-sm bg-slate-50 border border-slate-300 text-slate-900 text-sm rounded-lg focus:ring-sky-500 focus:border-sky-500 block w-full p-3 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-sky-500 dark:focus:border-sky-500" placeholder="name@flowbite.com" required>
                </div>
                <div>
                    <label for="subject" class="block mb-2 text-sm font-medium text-slate-900 dark:text-gray-300">Subject</label>
                    <input type="text" id="subject" class="block p-3 w-full text-sm text-slate-900 bg-slate-50 rounded-lg border border-slate-300 shadow-sm focus:ring-sky-500 focus:border-sky-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-sky-500 dark:focus:border-sky-500" placeholder="Let us know how we can help you" required>
                </div>
                <div class="sm:col-span-2">
                    <label for="message" class="block mb-2 text-sm font-medium text-slate-900 dark:text-gray-400">Your message</label>
                    <textarea id="message" rows="6" class="block p-3 w-full text-sm text-slate-900 bg-slate-50 rounded-lg shadow-sm border border-slate-300 focus:ring-sky-500 focus:border-sky-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-sky-500 dark:focus:border-sky-500" placeholder="Leave a comment..."></textarea>
                </div>
                <button type="submit" class="py-3 px-6 text-sm font-medium text-center text-white rounded-lg bg-sky-600 sm:w-fit hover:bg-sky-700 focus:ring-4 focus:outline-none focus:ring-sky-300 dark:bg-sky-600 dark:hover:bg-sky-700 dark:focus:ring-sky-800 transition-colors">Send message</button>
            </form>
        </div>
    </div>
</section>
@endsection
