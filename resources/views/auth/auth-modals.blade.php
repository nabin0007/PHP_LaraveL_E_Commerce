@php use Illuminate\Support\Str; @endphp

<!-- Sign Up Modal -->
<div class="modal fade" id="userModal" tabindex="-1" aria-labelledby="userModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content p-8">

            <div class="flex justify-between items-center mb-4">
                <h3 class="font-bold text-gray-800" id="userModalLabel">Sign Up</h3>

                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <!-- Name -->
                    <div class="mb-3">
                        <label class="mb-2 block text-gray-800">Name</label>
                        <input type="text" name="name" value="{{ old('name') }}"
                               class="form-control w-full p-2 rounded-lg border 
                               @error('name') border-red-500 @else border-gray-300 @enderror"
                               placeholder="Enter Your Name" required>

                        @error('name')
                            <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Email -->
                    <div class="mb-3">
                        <label class="mb-2 block text-gray-800">Email address</label>
                        <input type="email" name="email" value="{{ old('email') }}"
                               class="form-control w-full p-2 rounded-lg border 
                               @error('email') border-red-500 @else border-gray-300 @enderror"
                               placeholder="Enter Email address" required>

                        @error('email')
                            <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Password -->
                    <div class="mb-5">
                        <label class="mb-2 block text-gray-800">Password</label>
                        <input type="password" name="password"
                               class="form-control w-full p-2 rounded-lg border 
                               @error('password') border-red-500 @else border-gray-300 @enderror"
                               placeholder="Enter Password" required>

                        @error('password')
                            <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                        @enderror

                        <span class="block mt-1 text-sm text-gray-500">
                            By Signing up, you agree to our
                            <a href="#" class="text-green-600">Terms of Service</a> &
                            <a href="#" class="text-green-600">Privacy Policy</a>
                        </span>
                    </div>

                    <!-- Submit -->
                    <button type="submit"
                        class="btn w-full bg-green-600 text-white rounded-lg py-2 hover:bg-green-700">
                        Sign Up
                    </button>

                </form>
            </div>

            <div class="modal-footer border-0 justify-center">
                Already have an account?
                <a href="#" data-bs-toggle="modal" data-bs-target="#loginModal" data-bs-dismiss="modal"
                   class="text-green-600 ml-1">Sign In</a>
            </div>

        </div>
    </div>
</div>



<!-- Login Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content p-8">

            <div class="flex justify-between items-center mb-4">
                <h3 class="font-bold text-gray-800" id="loginModalLabel">Sign In</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body">
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <!-- Email -->
                    <div class="mb-3">
                        <label class="mb-2 block text-gray-800">Email address</label>
                        <input type="email" name="email" value="{{ old('email') }}"
                               class="form-control w-full p-2 rounded-lg border 
                               @error('email') border-red-500 @else border-gray-300 @enderror"
                               placeholder="Enter Email" required>

                        @error('email')
                            <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Password -->
                    <div class="mb-4">
                        <label class="mb-2 block text-gray-800">Password</label>
                        <input type="password" name="password"
                               class="form-control w-full p-2 rounded-lg border 
                               @error('password') border-red-500 @else border-gray-300 @enderror"
                               placeholder="Enter Password" required>

                        @error('password')
                            <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Submit -->
                    <button type="submit"
                        class="btn w-full bg-green-600 text-white rounded-lg py-2 hover:bg-green-700">
                        Sign In
                    </button>
                </form>
            </div>

            <div class="modal-footer border-0 justify-center">
                Don’t have an account?
                <a href="#" data-bs-toggle="modal" data-bs-target="#userModal" data-bs-dismiss="modal"
                   class="text-green-600 ml-1">Sign Up</a>
            </div>

        </div>
    </div>
</div>


