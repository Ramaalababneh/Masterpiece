<section class="ftco-section ftco-cart mt-6">
    <form method="post" action="{{ route('profile.destroy') }}" class="rounded">
        @csrf
        @method('delete')

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
                            {{ __('Delete Account') }}
                        </h2>

                        <p class="mt-1 text-sm text-gray-600">
                            {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.') }}
                        </p>

                        <div class="mt-6 space-y-6">
                            <div class="form-group">
                                <x-input-label for="password" value="{{ __('Password') }}" class="sr-only" />
                                <x-text-input
                                    id="password"
                                    name="password"
                                    type="password"
                                    class="form-control"
                                    placeholder="{{ __('Password') }}"
                                />
                                <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
                            </div>

                            <div class="form-group">
                                <button class="col-lg-4 btn btn-warning py-3 px-4" type="submit">{{ __('Delete Account') }}</button>
                            </div>

                            @if ($errors->userDeletion->isNotEmpty())
                                <p style="color: red;" class="text-red-500 mt-2">{{ __('Incorrect password. Please try again.') }}</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</section>
