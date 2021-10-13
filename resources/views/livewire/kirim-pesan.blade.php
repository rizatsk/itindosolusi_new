<div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
    <form wire:submit.prevent="kirimPesan" role="form" class="php-email-form">
        <div class="row">
          <div class="form-group col-md-6">
            <label for="name">Nama Anda</label>
            <input wire:model="name" type="text" name="name" class="form-control @error('name')is-invalid @enderror" id="name">
            @error('name')
                <div class="invalid-feedback"> {{ $message}} </div>
            @enderror
          </div>
          <div class="form-group col-md-6">
            <label for="name">Email Anda</label>
            <input wire:model="email" type="email" class="form-control @error('email')is-invalid @enderror" name="email" id="email">
            @error('email')
                <div class="invalid-feedback"> {{ $message}} </div>
            @enderror
          </div>
        </div>
        <div class="form-group">
          <label for="name">Subject</label>
          <input wire:model="subject" type="text" class="form-control @error('subject')is-invalid @enderror" name="subject" id="subject">
            @error('email')
                <div class="invalid-feedback"> {{ $message}} </div>
            @enderror
        </div>
        <div class="form-group">
          <label for="name">Kirim Pesan</label>
          <textarea wire:model="message" class="form-control @error('message')is-invalid @enderror" name="message" rows="10" id="message"></textarea>
            @error('message')
                <div class="invalid-feedback"> {{ $message}} </div>
            @enderror
        </div>
        <div class="my-3">
        </div>

        {{-- Send Message via Whatsapp --}}
        @if (session()->has('message'))
        <script>
            sendMessage();
        </script>
        {{-- End --}}
        @endif
        
        <div class="text-center"><button type="submit">Send Message</button></div>
      </form>
</div>
