<section class="ftco-section ftco-cart mt-6">
    <form method="post" action="{{ route('password.update') }}" class="rounded">
        @csrf
        @method('put')

        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-3">
                    <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                        <!-- You can display an icon or image here if needed -->
                    </div>
                </div>
                <div class="col-lg-8 col-md-9">
                    <div class="p-3 py-5">
                        <h2 class="text-lg font-medium text-gray-900">
                            {{ __('Update Password') }}
                        </h2>

                        <p class="mt-1 text-sm text-gray-600">
                            {{ __('Ensure your account is using a long, random password to stay secure.') }}
                        </p>

                        <div class="mt-6 space-y-4">
                            <div class="form-group">
                                <x-input-label for="current_password" :value="__('Current Password')" />
                                <x-text-input id="current_password" name="current_password" type="password" class="form-control" autocomplete="current-password" />
                                <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
                            </div>

                            <div class="form-group">
                                <x-input-label for="password" :value="__('New Password')" />
                                <x-text-input id="password" name="password" type="password" class="form-control" autocomplete="new-password" />
                                <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
                            </div>

                            <div class="form-group">
                                <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
                                <x-text-input id="password_confirmation" name="password_confirmation" type="password" class="form-control" autocomplete="new-password" />
                                <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
                            </div>

                            <div class="form-group">
                                <button class="btn btn-warning py-3 px-4" type="submit">{{ __('Save') }}</button>

                                @if (session('status') === 'password-updated')
                                    <p class="mt-2 text-sm text-gray-600">{{ __('Saved.') }}</p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</section>
