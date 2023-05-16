<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div style="display:table; margin:auto">
                <div>
                    <x-jet-label for="name" value="{{ __('Név') }}" />
                    <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                </div>

                <div class="mt-4">
                    <x-jet-label for="email" value="{{ __('Email') }}" />
                    <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                </div>
                
                <div class="mt-4">
                    <x-jet-label for="tel" value="{{ __('Telefonszám') }}" />
                    <x-jet-input id="tel" class="block mt-1 w-full" type="tel" name="tel" required />
                </div>

                <div class="mt-4">
                    <x-jet-label for="hirlevel" value="{{ __('Hírlevél') }}" />
                    <x-jet-input id="hirlevel" class="block mt-1" type="checkbox" name="hirlevel" />
                </div>

                <div class="mt-4">
                    <x-jet-label for="varos" value="{{ __('Város') }}" />
                    <x-jet-input id="varos" class="block mt-1 w-half" type="text" name="varos" required autofocus autocomplete="varos" />
                </div>

                <div class="mt-4">
                    <x-jet-label for="cim" value="{{ __('Utca, házszám') }}" />
                    <x-jet-input id="cim" class="block mt-1 w-full" type="text" name="cim" required autofocus autocomplete="cim" />
                </div>
                
                <div class="mt-4">
                    <x-jet-label for="password" value="{{ __('Jelszó') }}" />
                    <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                </div>
                
                <div class="mt-4">
                    <x-jet-label for="password_confirmation" value="{{ __('Jelszó újra') }}" />
                    <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
                </div>

                @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms" required />
                            
                            <div class="ml-2">
                                {!! __('Elfogadom a :terms_of_service és :privacy_policy', [
                                    'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Szolgáltatási Feltételeket').'</a>',
                                            'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Adatvédelmi Szábályzatot').'</a>',
                                            ]) !!}
                                </div>
                            </div>
                        </x-jet-label>
                    </div>
                    @endif
                    
                    <div class="flex items-center justify-end mt-4">
                        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                        {{ __('Már regisztráltál?') }}
                    </a>

                    <x-jet-button class="ml-4">
                        {{ __('Regisztráció') }}
                    </x-jet-button>
                </div>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
