
    <section>
        <h1>Create an account</h1>

        @if (session('success'))
            <div role="alert">
                {{ session('success') }}
            </div>
        @endif

        <form action="/register" method="POST">
            @csrf
            
            <label for="name">Your Name</label>
            <input type="text" name="name" id="name" placeholder="your name" value="{{ old('name') }}" required>
            @error('name')
                <p>{{ $message }}</p>
            @enderror

            <label for="email">Your email</label>
            <input type="email" name="email" id="email" placeholder="name@company.com" value="{{ old('email') }}" required>
            @error('email')
                <p>{{ $message }}</p>
            @enderror

            <label for="password">Password</label>
            <input type="password" name="password" id="password" placeholder="••••••••" required>
            @error('password')
                <p>{{ $message }}</p>
            @enderror

            <label for="password_confirmation">Confirm password</label>
            <input type="password" name="password_confirmation" id="password_confirmation" placeholder="••••••••" required>
            @error('password_confirmation')
                <p>{{ $message }}</p>
            @enderror

            <button type="submit">Create an account</button>

            <p>
                Already have an account? <a href="#">Login here</a>
            </p>
        </form>
    </section>