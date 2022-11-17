







<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
<link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
</head>
<body>


<section class=" py-1 bg-blueGray-50">
<div class="w-full lg:w-8/12 px-4 mx-auto mt-6">
  <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-blueGray-100 border-0">
    <div class="rounded-t bg-white mb-0 px-6 py-6">
      <div class="text-center flex justify-between">
        <h6 class="text-blueGray-700 text-xl font-bold">
          Need blood</h6>
        </div>
    </div>
    <div class="flex-auto px-4 lg:px-8 py-10 pt-0">
      <form>
         <h2 class="mt-4 px-3"><strong> Blood Group</strong></h2> 
        <div class="flex flex-wrap">
          <div class="w-full lg:w-12/12 px-4">
            <div class="relative w-full mb-3">
              <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                <select id="Blood Group" name="Blood Group" >
                  <option>Select</option>
                <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">
           <option value="A+">A+</option>
                  <option value="A-">A-</option>
                  <option value="B+">B+</option>
                  <option value="B-">B-</option>
                  <option value="O+">O+</option>
                  <option value="O-">O-</option>
                  <option value="AB+">AB+</option>
                  <option value="AB-">AB-</option>
              </select>
              </label>

              <h2 class="mt-4"><strong>Address</strong></h2>
          <textarea placeholder="abc colony"></textarea>
          <br>

  <h2 class="mt-4"><strong>Reasons,why do you need blood?</strong></h2>
  <textarea placeholder="" required></textarea><br>
     
        <button class="bg-pink-500 text-white active:bg-pink-600 font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 ease-linear transition-all duration-150 mt-4" type="button">
          Submit
        </button>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
  
</div>
</section>
</body>
</html>