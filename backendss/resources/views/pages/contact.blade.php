@extends('partials.layout')
@section('content')
  <body class="bg-primary">

    </section>

    <h1 class="relative text-4xl md:text-5xl text-white font-primary text-center mt-[2em] ">
      CONTACT OUR TEAM
    </h1>
<div class="flex flex-col items-center px-20 pb-96 rounded-none max-md:px-5 max-md:pb-24">
  <div class="flex flex-col items-center w-[450px] md:max-w-full md:w-[1180px] mt-14">
    <form class="flex flex-col items-start self-stretch w-full" action="{{route('mail')}}" method="POST" >
        @csrf
      <div class="flex flex-col items-start self-stretch pl-1.5 text-xl md:text-2xl text-white max-md:max-w-full">
        <label for="nameInput" class="ml-3 max-md:ml-2.5">NAME</label>
        <input
          type="text"
          id="nameInput"
          name="name"
          placeholder="Ex: JOHN DOE"
          aria-label="Enter your name"
          class="self-stretch px-8 py-10 mt-4 rounded-2xl mb-4 border-4 border-accent border-solid text-white text-opacity-50 bg-transparent max-md:px-5 max-md:max-w-full"
        />

        <label for="emailInput" class="mt-3 ml-3 max-md:ml-2.5">EMAIL</label>
        <input
          type="email"
          id="emailInput"
          name="email"
          placeholder="Ex: johndoe@gmail.com"
          aria-label="Enter your email"
          class="self-stretch px-8 py-10 mt-4 rounded-2xl  mb-4 border-4 border-accent border-solid text-white text-opacity-50 bg-transparent max-md:px-5 max-md:mr-1 max-md:max-w-full"
        />

        <label for="messageInput" class=" mt-4 md:mt-10 ml-3 max-md:ml-2.5">MESSAGE</label>
        <textarea
          id="messageInput"
          name="message"
          placeholder="Write something cool to us......"
          aria-label="Enter your message"
          class="self-stretch px-10 pt-11 pb-96 mt-3.5  mb-4 text-xl md:text-2xl rounded-2xl border-4 border-accent border-solid text-white text-opacity-50 bg-transparent max-md:px-5 max-md:pb-28 max-md:max-w-full"
        ></textarea>
      </div>

     <div class="relative text-7xl text-white font-secondary my-22 px-31  ml-16 md:ml-36 mt-4">
        <button type="submit" class="rounded-md bg-accent py-4 px-[10em]  md:px-[30em] border border-transparent text-center text-sm text-white transition-all
         shadow-md hover:shadow-lg focus:bg-slate-700 focus:shadow-none active:bg-slate-700 hover:bg-slate-700 active:shadow-none
         disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" type="button">
          Submit </button>
        </div>
      </button>
    </form>

     <h1 class="relative text-4xl md:text-5xl text-white font-primary text-center mt-34 md:mt-48 ">
      SPONSORS
    </h1>

     <div class="w-[70em] md:w-[130em] items-center md:mt-[-12em]">
       <img
      src="/Group81.png" alt="img">
    </div>
        </div>
      </div>
    </div>
  </div>
</div>
  </body>
@endsection
