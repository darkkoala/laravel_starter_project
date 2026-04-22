<x-layout>
    
<form method="POST" action="/login">
  @csrf

    <fieldset class="fieldset bg-base-200 border-base-300 rounded-box w-xs border p-4 mx-auto">
        <legend class="fieldset-legend">Login</legend>
        <x-forms.error name=email />

        <label class="label">Email</label>
        <input type="email" name="email" class="input" placeholder="Email" required />
        
        
        <label class="label">Password</label>
        <input type="password" name="password" class="input" placeholder="Password" required />

        <button class="btn btn-neutral mt-4">Login</button>
    </fieldset>

</form>


</x-layout>