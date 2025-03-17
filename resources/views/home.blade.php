<x-layout>
    <x-header/>
    <div class="container">
        <section class="section" data-aos="fade-up">
            <h2 class="text-center font-raleway">Welcome to My Website</h2>
            <p class="text-center">This is a demo layout using Tailwind and Blade.</p>
        </section>

        <div class="flex">
            <aside class="sidebar" data-aos="fade-right">
                <h3 class="font-bold">Sidebar</h3>
                <p>Some sidebar content</p>
            </aside>
            <main class="main-content" data-aos="fade-left">
                <div class="card">
                    <div class="card-header">Main Content</div>
                    <div class="card-body">This is the main content area.</div>
                    <div class="card-footer">Footer</div>
                </div>
            </main>
        </div>
    </div>
    {{--  Form  --}}
    <section class="section" data-aos="zoom-in">
        <div class="form-container">
            <h2 class="text-center font-bold text-lg mb-4">Contact Us</h2>
            <form action="/submit" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" id="name" name="name" class="form-input" required>
                </div>
                <div class="form-group">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" id="email" name="email" class="form-input" required>
                </div>
                <div class="form-group">
                    <label for="message" class="form-label">Message</label>
                    <textarea id="message" name="message" class="form-textarea" required></textarea>
                </div>
                <button type="submit" class="form-button">Send Message</button>
            </form>
        </div>
    </section>

    <x-footer/>
</x-layout>
