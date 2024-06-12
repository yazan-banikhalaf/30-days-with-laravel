<x-layouts>
    <x-slot:title>
        Log In
    </x-slot:title>
    <form method="POST" action="">
        @csrf
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
            
                <div class="grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

                    <div class="sm:col-span-4">
                        <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email</label>

                        <div class="mt-2">
                            <x-form-input type="email" name="email" placeholder="test@gmail.com" :value="old('email')" required/>
                        
                            <x-form-error name='email'/>
                        </div>
                    </div>

                    <div class="sm:col-span-4">
                        <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Password</label>

                        <div class="mt-2">
                            <x-form-input type="password" name="password" placeholder="Enter Your Password" required/>
                        </div>
                        
                        <x-form-error name='password'/>
                    </div>
                    
                </div>
            </div>  
        </div>
    
        <div class="mt-6 flex items-center justify-end gap-x-6">
            <a href="/" type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</a>
            <x-form-button type="submit">Log In</x-form-button>
        </div>
    </form>
  
</x-layouts>