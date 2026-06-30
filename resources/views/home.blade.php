<x-frontend-layout>

    <section class="py-10">
        <div class="container">
            <div class="text-center py-4 space-y-3">
                <span class="text-(--secondary) bg-(--primary)/30 px-2 py-1 rounded-full">Career-Focused Learning</span>
                <h1 class="text-5xl font-bold text-(--secondary)">My Courses</h1>
                <p class="text-gray-600 italic">Master in-demand technical skills, work on real-world projects, and gain
                    practical experience that
                    companies are actively looking for in today’s job market.</p>
            </div>
            <div class="grid grid-cols-3 gap-3">
                @foreach ($courses as $course)
                    <div class="shadow-md">
                    <div class="overflow-hidden rounded-md">
                        <img class="hover:scale-105 duration-300" src="https://codeit.com.np/storage/course-featured/01KN8TZJBK25Q1M3WFGXAPR034.webp"
                            alt="">
                    </div>
                    <div class="p-5">
                        <h2 class="font-semibold text-(--primary) text-lg">{{$course->title}}</h2>
                        <p>{{$course->description}}</p>
                        <div>
                            <p>{{$course->price}}</p>
                            <small class="">{{$course->date}}</small>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
</x-frontend-layout>
