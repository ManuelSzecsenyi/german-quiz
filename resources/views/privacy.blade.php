<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gladlio</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet"/>

    <script defer data-domain="gladlio.com"
            src="https://plausible.io/js/script.pageview-props.tagged-events.js"></script>
    <script>window.plausible = window.plausible || function () {
            (window.plausible.q = window.plausible.q || []).push(arguments)
        }</script>


    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="antialiased font-sans">
<div class="bg-gray-50 text-black/50 dark:bg-black dark:text-white/50">

    <!-- Hero -->
    <div class="bg-white">
        <header class="absolute inset-x-0 top-0 z-50">
            <nav class="mx-auto flex max-w-7xl items-center justify-between p-6 lg:px-8" aria-label="Global">
                <div class="flex lg:flex-1">
                    <a href="/" class="-m-1.5 p-1.5">
                        <span class="sr-only">Your Company</span>
                        <img class="h-8 w-auto"
                             src="{{asset('storage/gladlio-logo.svg')}}" alt="">
                    </a>
                </div>
                @if (Route::has('login'))
                    <livewire:welcome.navigation/>
                @endif
            </nav>
        </header>
    </div>

    <main class="bg-white px-6 py-32 lg:px-8">
        <div class="mx-auto max-w-3xl text-base leading-7 text-gray-700">
            <h1 class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Privacy Policy</h1>

            <h2 class="mt-16 text-2xl font-bold tracking-tight text-gray-900">1. Introduction</h2>
            <p class="mt-6"> This Privacy Policy outlines
                how we collect, use, and protect your information when you use our website gladlio.com or sign up for
                our services, including newsletters. By using our website or services, you agree to the collection and
                use
                of your information in accordance with this policy.</p>

            <h2 class="mt-16 text-2xl font-bold tracking-tight text-gray-900">2. Information We Collect</h2>

            <h3 class="mt-8 text-1xl font-bold tracking-tight text-gray-900">A. Personal Information You Provide</h3>
            <p class="mt-6">We collect personal information that you voluntarily provide to us, such as:</p>
            <ul>
                <li>Email address (when signing up for our newsletter)</li>
            </ul>

            <h3 class="mt-8 text-1xl font-bold tracking-tight text-gray-900">B. Automatically Collected Information</h3>
            <p class="mt-6">When you visit our site, we collect information automatically through technical cookies,
                including:</p>
            <ul>
                <li>IP address</li>
                <li>Browser type and version</li>
                <li>Device information</li>
                <li>Pages visited, duration, and actions taken</li>
            </ul>
            <p class="mt-6">We use cookies to manage logins and enhance your user experience. Technical login cookies
                are essential
                for
                website functionality and security.</p>

            <h2 class="mt-16 text-2xl font-bold tracking-tight text-gray-900">3. How We Use Your Information</h2>
            <p class="mt-6">We use the information we collect in the following ways:</p>
            <ul>
                <li>To provide and maintain our website and services.</li>
                <li>To process and manage orders or requests.</li>
                <li>To send you newsletters or updates when you subscribe (via <strong>Brevo</strong>).</li>
                <li>To improve your experience by analyzing website usage.</li>
                <li>To comply with legal requirements and protect our services from misuse.</li>
            </ul>

            <h2 class="mt-16 text-2xl font-bold tracking-tight text-gray-900">4. Newsletter Subscription and
                Communication</h2>
            <p class="mt-6">We use Brevo (formerly Sendinblue) as our email marketing platform. If you subscribe to
                our newsletter,
                we
                will use your email address to send you news, updates, and promotional content. You can <strong>opt
                    out</strong> at any time by clicking the “unsubscribe” link at the bottom of each email.</p>
            <p class="mt-6">Your email address will <strong>not be shared with any third parties</strong> except for
                the purpose of
                sending newsletters through Brevo. Brevo is GDPR-compliant and committed to protecting your data.</p>

            <h2 class="mt-16 text-2xl font-bold tracking-tight text-gray-900">5. Cookies and Tracking Technologies</h2>

            <h3 class="mt-8 text-1xl font-bold tracking-tight text-gray-900">Technical Cookies</h3>
            <p class="mt-6">Our site uses cookies to facilitate the login process and improve user experience. These
                cookies:</p>
            <ul>
                <li>Help you stay logged in securely.</li>
                <li>Remember your preferences and optimize the functionality of our website.</li>
            </ul>
            <p class="mt-6">You can manage or block cookies through your browser settings. However, disabling cookies
                may affect the
                functionality of the site.</p>

            <h2 class="mt-16 text-2xl font-bold tracking-tight text-gray-900">6. Sharing Your Information</h2>
            <p class="mt-6">We do <strong>not sell</strong> or rent your personal information to third parties.
                However, we may share
                your data in the following circumstances:</p>
            <ul>
                <li><strong>Service Providers:</strong> We share your information with trusted third-party providers,
                    such
                    as Brevo, to manage our email communications.
                </li>
                <li><strong>Legal Requirements:</strong> We may disclose your information to comply with legal
                    obligations
                    or in response to lawful requests from public authorities.
                </li>
                <li><strong>Business Transfers:</strong> If our company undergoes a merger or acquisition, your data may
                    be
                    transferred.
                </li>
            </ul>

            <h2 class="mt-16 text-2xl font-bold tracking-tight text-gray-900">7. Data Security</h2>
            <p class="mt-6">We use appropriate technical and organizational measures to protect your data. Our website
                is hosted on
                <strong>SiteGround servers in the EU</strong>, ensuring compliance with <strong>GDPR</strong>
                regulations.
                Although we strive to keep your data secure, no method of transmission over the internet is 100% secure.
                We
                cannot guarantee absolute security but will take immediate steps in the event of a data breach.</p>

            <h2 class="mt-16 text-2xl font-bold tracking-tight text-gray-900">8. Your Data Protection Rights</h2>
            <p class="mt-6">As a user based in the European Union, you are entitled to the following rights under the
                <strong>GDPR</strong>:</p>
            <ul>
                <li><strong>Right to Access:</strong> Request copies of your personal data.</li>
                <li><strong>Right to Correction:</strong> Request that we correct any inaccurate or incomplete data.
                </li>
                <li><strong>Right to Deletion:</strong> Request the deletion of your personal data under certain
                    conditions.
                </li>
                <li><strong>Right to Restrict Processing:</strong> Request that we limit how we use your data.</li>
                <li><strong>Right to Data Portability:</strong> Request a copy of your data in a structured, commonly
                    used
                    format, or transfer your data to another service provider.
                </li>
            </ul>
            <p class="mt-6">To exercise these rights, please contact us at admin@gladlio.com.</p>

            <h2 class="mt-16 text-2xl font-bold tracking-tight text-gray-900">9. Third-Party Links</h2>
            <p class="mt-6">Our website may include links to third-party sites that are not operated by us. We are not
                responsible
                for
                the privacy practices of these external sites, and we encourage you to review their privacy
                policies.</p>

            <h2 class="mt-16 text-2xl font-bold tracking-tight text-gray-900">10. International Data Transfers</h2>
            <p class="mt-6">While we primarily store and process your data within the European Union (EU), some of our
                service
                providers,
                like Brevo, may transfer data to other jurisdictions. However, we ensure that all service providers
                comply
                with <strong>GDPR</strong> to ensure the protection of your personal data during such transfers.</p>


            <h2 class="mt-16 text-2xl font-bold tracking-tight text-gray-900">11. Changes to This Privacy Policy</h2>
            <p class="mt-6">We may update this privacy policy from time to time to reflect changes in our data
                practices or
                regulatory
                requirements. Any significant changes will be communicated through this page, and we encourage you to
                review
                the policy periodically.</p>

            <h2 class="mt-16 text-2xl font-bold tracking-tight text-gray-900">12. Contact Us</h2>
            <p class="mt-6">If you have any questions or concerns about our privacy practices, please contact us
                at:</p>
            <p class="mt-6">Manuel Szecsenyi<br>
                Limmatfeld-Strasse 10, 8953 Dietikon, Switzerland<br>
                admin@gladlio.com<br>
            </p>
        </div>

    </main>

    <!-- footer -->
    <footer class="bg-white">
        <div class="mx-auto max-w-7xl overflow-hidden px-6 py-20 sm:py-24 lg:px-8 sm:pt-0">
            <nav class="-mb-6 columns-2 sm:flex sm:justify-center sm:space-x-12" aria-label="Footer">
                <div class="pb-6">
                    <a href="/imprint"
                       class="text-sm leading-6 text-gray-600 hover:text-gray-900">Imprint</a>
                </div>
                <div class="pb-6">
                    <a href="/privacy" class="text-sm leading-6 text-gray-600 hover:text-gray-900">Privacy</a>
                </div>
            </nav>
            <!--
            <div class="mt-10 flex justify-center space-x-10">
                <a href="#" class="text-gray-400 hover:text-gray-500">
                    <span class="sr-only">Facebook</span>
                    <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path fill-rule="evenodd"
                              d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                              clip-rule="evenodd"/>
                    </svg>
                </a>
                <a href="#" class="text-gray-400 hover:text-gray-500">
                    <span class="sr-only">Instagram</span>
                    <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path fill-rule="evenodd"
                              d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                              clip-rule="evenodd"/>
                    </svg>
                </a>
                <a href="#" class="text-gray-400 hover:text-gray-500">
                    <span class="sr-only">X</span>
                    <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path
                            d="M13.6823 10.6218L20.2391 3H18.6854L12.9921 9.61788L8.44486 3H3.2002L10.0765 13.0074L3.2002 21H4.75404L10.7663 14.0113L15.5685 21H20.8131L13.6819 10.6218H13.6823ZM11.5541 13.0956L10.8574 12.0991L5.31391 4.16971H7.70053L12.1742 10.5689L12.8709 11.5655L18.6861 19.8835H16.2995L11.5541 13.096V13.0956Z"/>
                    </svg>
                </a>
                <a href="#" class="text-gray-400 hover:text-gray-500">
                    <span class="sr-only">GitHub</span>
                    <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path fill-rule="evenodd"
                              d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                              clip-rule="evenodd"/>
                    </svg>
                </a>
                <a href="#" class="text-gray-400 hover:text-gray-500">
                    <span class="sr-only">YouTube</span>
                    <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path fill-rule="evenodd"
                              d="M19.812 5.418c.861.23 1.538.907 1.768 1.768C21.998 8.746 22 12 22 12s0 3.255-.418 4.814a2.504 2.504 0 0 1-1.768 1.768c-1.56.419-7.814.419-7.814.419s-6.255 0-7.814-.419a2.505 2.505 0 0 1-1.768-1.768C2 15.255 2 12 2 12s0-3.255.417-4.814a2.507 2.507 0 0 1 1.768-1.768C5.744 5 11.998 5 11.998 5s6.255 0 7.814.418ZM15.194 12 10 15V9l5.194 3Z"
                              clip-rule="evenodd"/>
                    </svg>
                </a>
            </div>
            -->
            <p class="mt-10 text-center text-xs leading-5 text-gray-500">&copy; <?= date("Y") ?> Gladlio</p>
        </div>
    </footer>

</div>
</body>
</html>



