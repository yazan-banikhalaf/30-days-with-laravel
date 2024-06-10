<x-layouts>
    <x-slot:title>
        Register
    </x-slot:title>
    <form method="POST" action="/register">
        @csrf
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
            
                <div class="grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-4">
                        <x-form-label for="first_name">First Name</x-form-label>
                        <div class="mt-2">
                            <x-form-input type="text" name="first_name" placeholder="Yazan" required/>
                        </div>
                        <x-form-error name='first_name'/>
                    </div>
            
                    <div class="sm:col-span-4">
                        <label for="last_name" class="block text-sm font-medium leading-6 text-gray-900">Last Name</label>
                        <div class="mt-2">
                            <x-form-input type="text" name="last_name" placeholder="Banikhallaf" required/>
                        </div>
                        <x-form-error name='last_name'/>
                    </div>

                    <div class="sm:col-span-4">
                        <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email</label>

                        <div class="mt-2">
                            <x-form-input type="email" name="email" placeholder="test@gmail.com" required/>
                        </div>
                        
                        <x-form-error name='email'/>
                    </div>

                    <div class="sm:col-span-4">
                        <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Password</label>

                        <div class="mt-2">
                            <x-form-input type="password" name="password" placeholder="Enter Your Password" required/>
                        </div>
                        
                        <x-form-error name='password'/>
                    </div>

                    <div class="sm:col-span-4">
                        <label for="password_confirmation" class="block text-sm font-medium leading-6 text-gray-900">Confirm Password</label>

                        <div class="mt-2">
                            <x-form-input type="password" name="password_confirmation" placeholder="Enter Your Confirmation Password" required/>
                        </div>
                        
                        <x-form-error name='password_confirmation'/>
                    </div>
                </div>
            </div>  
        </div>
    
        <div class="mt-6 flex items-center justify-end gap-x-6">
            <a href="/" type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</a>
            <x-form-button type="submit">Register</x-form-button>
        </div>
    </form>
  
</x-layouts>
