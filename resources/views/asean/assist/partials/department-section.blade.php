@props([
    'title' => '',
    'description' => '',
    'members' => [],
    'id' => '',
    'showToggle' => true,
])

<div class="mb-24">
    <div class="department-header mb-8">
        <div class="flex items-center gap-4 mb-4">
            <div class="h-px flex-1 bg-gradient-to-r from-transparent to-asean-gold/30"></div>
            <h3 class="font-asean-display text-2xl lg:text-3xl font-semibold text-asean-navy">{{ $title }}</h3>
            <div class="h-px flex-1 bg-gradient-to-l from-transparent to-asean-gold/30"></div>
        </div>
        <p class="text-readable-light text-center max-w-4xl mx-auto leading-relaxed">
            {{ $description }}
        </p>
        @if($showToggle)
            <div class="text-center mt-6">
                <button class="dept-toggle-btn" onclick="toggleDepartment('{{ $id }}', this)">
                    <span>Meet the Team</span>
                    <span class="toggle-icon">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"/></svg>
                    </span>
                </button>
            </div>
        @endif
    </div>
    
    @if($showToggle)
        <div id="dept-{{ $id }}" class="dept-members-wrapper">
            <div class="dept-members-inner">
                <div class="flex flex-wrap justify-center gap-6 pt-2">
                    @foreach($members as $index => $member)
                        @include('asean.assist.partials.team-card', [
                            'member' => array_merge($member, ['id' => $member['id'] ?? $member['name']]),
                            'delay' => $index * 100
                        ])
                    @endforeach
                </div>
            </div>
        </div>
    @else
        <div class="flex flex-wrap justify-center gap-6">
            @foreach($members as $index => $member)
                @include('asean.assist.partials.team-card', [
                    'member' => array_merge($member, ['id' => $member['id'] ?? $member['name']]),
                    'delay' => $index * 100
                ])
            @endforeach
        </div>
    @endif
</div>
