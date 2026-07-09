<x-frontend-layout>
    <section class="pt-10">
        <div class="max-w-4xl mx-auto">
            <h1 class="mb-3 text-(--secondary) text-7xl font-bold text-center">Get In <span class="text-(--primary)">Touch</span></h1>
            <p class="mb-3 text-center">Have a question, idea, or project? We're just a message away.</p>
            <form action="{{route('contact.store')}}" method="POST">
                @csrf
                <div>
                    <label class="text-(--primary) font-semibold" for="name">Full Name</label>
                    <input class="border w-full" type="text" name="full_name" id="name">
                </div>
                <div>
                    <label class="text-(--primary) font-semibold" for="number">Phone Number</label>
                    <input class="border w-full" type="number" name="number" id="number">
                </div>
                <div>
                    <label class="text-(--primary) font-semibold" for="address">Address</label>
                    <input class="border w-full" type="text" name="address" id="address">
                </div>
                <div>
                    <label class="text-(--primary) font-semibold" for="message">Message</label>
                    <textarea class="border w-full" name="message" id="message" cols="20" rows="5"></textarea>
                </div>
                <button class="bg-(--primary) hover:bg-(--secondary) py-5 px-7 rounded-xl text-white font-semibold duration-300" type="submit">Submit </button>
            </form >
        </div>
    </section>
</x-frontend-layout>

{{-- Get  --}}
