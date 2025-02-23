

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Presto.it - {{__('ui.revisorReq')}}</title>
</head>
<body style="font-family: Arial, sans-serif; line-height: 1.6; background-color: #f7f7f7; color: #2b2d42; margin: 0; padding: 0;">
   <div style="max-width: 600px; margin: 40px auto; background: white; border-radius: 15px; box-shadow: 0 4px 12px rgba(0,0,0,0.1); overflow: hidden;">
       <!-- Header -->
       <div style="background: rgb(197, 37, 56); color: white; padding: 30px; text-align: center;">
           <h3>PRESTO</h3>
           <h1 style="font-size: 24px; font-weight: 600; margin-bottom: 10px;">{{__('ui.newRevisorReq')}}</h1>
       </div>

       <!-- Content -->
       <div style="padding: 30px;">
           <h2 style="font-size: 20px; color: #2b2d42; margin-bottom: 20px; border-bottom: 2px solid #edf2f4; padding-bottom: 10px;">
               {{__('ui.candidate')}}
           </h2>

           <!-- User Info Box -->
           <div style="background: #edf2f4; padding: 20px; border-radius: 10px; margin-bottom: 25px;">
               <p style="margin: 10px 0; font-size: 16px; color: #2b2d42;">
                   <span style="font-weight: 600; color: #8d99ae;">{{__('ui.userName')}}:</span>
                   {{ $user->name }}
               </p>
               <p style="margin: 10px 0; font-size: 16px; color: #2b2d42;">
                   <span style="font-weight: 600; color: #8d99ae;">Email:</span>
                   {{ $user->email }}
               </p>
           </div>

           <!-- CTA Section -->
           <p style="text-align: center; margin-bottom: 20px; color: #2b2d42;">
               {{__('ui.confirmation')}}:
           </p>

           <div style="text-align: center;">
               <a href="{{route('make.revisor', compact('user'))}}"
                  style="display: inline-block; padding: 12px 30px; background-color: rgb(197, 37, 56);
                         color: white; text-decoration: none; border-radius: 8px; font-weight: 600;
                         text-align: center;">
                   {{__('ui.revConfirm')}}
               </a>
           </div>
       </div>

       <!-- Footer -->
       <div style="text-align: center; padding: 20px; background: #edf2f4; color: #8d99ae; font-size: 14px;">
           © 2024 Presto.it - {{__('ui.copyright')}}
       </div>
   </div>
</body>
</html>