<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ayu Anggrahini - My Showcase</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body class="bg-[#FCE4EC]"> <div class="bg-[#90CAF9] p-4 flex justify-between items-center shadow-md">
        <h1 class="text-white text-xl font-bold ml-4">Ayu Anggrahini</h1>
        <div class="space-x-6 mr-4 text-white font-medium">
            <a href="#">Profile</a>
            <a href="/education">Education</a>
            <a href="#">Showcase</a>
        </div>
    </div>

    <div class="text-center my-10">
        <h2 class="text-[#64B5F6] text-4xl font-bold">My Showcase</h2>
    </div>

    <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-10 px-6">
        
        <div class="bg-white p-8 rounded-3xl shadow-lg">
            <h3 class="text-[#F06292] text-2xl font-bold mb-6">Skill Matrix & Tools</h3>
            
            @foreach($skills as $skill)
            <div class="mb-5">
                <p class="font-bold text-gray-800">{{ $skill->name }}</p>
                <div class="w-full bg-gray-100 rounded-full h-5 mt-1 relative overflow-hidden">
                    <div class="h-5 rounded-full transition-all duration-500" 
                         style="width: {{ $skill->percentage }}%; 
                                background-color: {{ $skill->color == 'pink' ? '#F06292' : '#90CAF9' }}">
                        <span class="absolute right-2 text-[10px] text-white font-bold">{{ $skill->percentage }}%</span>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <div class="bg-white p-8 rounded-3xl shadow-lg">
            <h3 class="text-[#64B5F6] text-2xl font-bold mb-6">Organizational Experience</h3>
            
            @foreach($experiences as $exp)
            <div class="flex gap-4 mb-8">
                <div class="w-12 h-12 bg-[#FCE4EC] rounded-full flex items-center justify-center shrink-0">
                    <i class="fas fa-users text-[#F06292]"></i>
                </div>
                <div>
                    <h4 class="font-bold text-xl text-gray-800">{{ $exp->organization }}</h4>
                    <p class="text-[#64B5F6] font-semibold">{{ $exp->role }}</p>
                    <p class="text-gray-600 text-sm mt-2 leading-relaxed">
                        {{ $exp->description }}
                    </p>
                </div>
            </div>
            @endforeach
        </div>

    </div>

    <footer class="text-center mt-20 mb-10 text-gray-500 text-sm">
        © 2026 Ayu Anggrahini - UTS Pemrograman Web
    </footer>

</body>
</html>