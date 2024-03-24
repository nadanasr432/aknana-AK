  <form method="post" action="{{ route('footer.store') }}">
        @csrf
        <label for="phone">Phone:</label><br>
        <input type="text" id="phone" name="phone" value="{{ old('phone') }}" required><br><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" value="{{ old('email') }}" required><br><br>

        <label for="text_en">Text (English):</label><br>
        <textarea id="text_en" name="text[en]" required>{{ old('text.en') }}</textarea><br><br>

        <label for="text_ar">Text (Arabic):</label><br>
        <textarea id="text_ar" name="text[ar]" required>{{ old('text.ar') }}</textarea><br><br>

        <label for="location_en">Location (English):</label><br>
        <input type="text" id="location_en" name="location[en]" value="{{ old('location.en') }}" required><br><br>

        <label for="location_ar">Location (Arabic):</label><br>
        <input type="text" id="location_ar" name="location[ar]" value="{{ old('location.ar') }}" required><br><br>

        <button type="submit">Create Footer</button>
    </form>