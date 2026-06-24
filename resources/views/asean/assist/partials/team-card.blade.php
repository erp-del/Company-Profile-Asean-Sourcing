@props([
    'member' => [
        'id' => '',
        'name' => '',
        'role' => '',
        'department' => '',
        'color' => '',
        'image' => '',
    ],
    'delay' => 0,
])

<div class="team-card w-full sm:w-[280px] bg-white border border-slate-200 rounded-3xl p-6 cursor-pointer" 
     onclick="openModal('{{ $member['id'] }}')" 
     style="transition-delay: {{ $delay }}ms;">
    <div class="relative mb-5">
        <div class="profile-ring absolute inset-0 rounded-full bg-gradient-to-br {{ $member['color'] }} blur-lg opacity-30"></div>
        <div class="profile-image relative w-28 h-28 mx-auto rounded-full overflow-hidden shadow-xl">
            <img src="{{ $member['image'] }}" alt="{{ $member['name'] }}" class="w-full h-full object-cover">
        </div>
    </div>
    <h4 class="font-semibold text-readable text-lg text-center mb-2">{{ $member['name'] }}</h4>
    <p class="text-asean-gold text-xs text-center font-semibold uppercase tracking-wider">{{ $member['department'] }}</p>
</div>
