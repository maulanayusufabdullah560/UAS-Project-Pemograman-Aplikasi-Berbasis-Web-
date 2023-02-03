
{{-- <div data-aos="fade-up" data-aos-duration="1000" class="space-y-2">
    <img src="{{ asset('images/'.$produk->photo) }}" alt="{{ $produk->name }}" class="w-full bg-center">
    <div class="flex items-center pt-2">
        <h4 class="text-[1.2rem] font-semibold">{{ $produk->name }}</h4>
        <div class="flex items-center ml-auto space-x-1">
            <img src="../assets/Star.svg" alt=""><p>4.3</p>
        </div></div>
        <div class="space-y-5"><p class="text-[.9rem] text-content">
            {{ $produk->description }}</p>
            <div class="flex items-center">
                <button class="flex items-center space-x-2 bg-[#F5FCE8] rounded-sm px-2 py-2 text-second">
                    <ion-icon name="add-outline" class="font-semibold">
                        </ion-icon>
                        <p>Add</p>
</button>
<p class="ml-auto font-semibold">${{ $produk->price}}</p>
</div></div></div> --}}


@foreach ($produks as $produk)
<div class="bg-[#16130D]">
    <div class="flex gap-2 p-3">
      <img class="mt-1 h-[15px] w-[15px]" src="assets/img/star.png" />
      <p>2.1</p>
    </div>
    <img src="{{ asset('images/'.$produk->photo) }}" alt="{{ $produk->name }}" class="m-4 w-[222px] h-[185px]" />
    <h3 class="pt-4 pl-4">{{ $produk->name }}</h3>
    <div class="flex justify-between pl-4 pb-4 pt-1 pr-4 text-sm">
      <p>{{ $produk->description }}</p>
      <h4>${{ $produk->price}}</h4>
    </div>
  </div>
  @endforeach