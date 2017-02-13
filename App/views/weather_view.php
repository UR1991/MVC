<!--Weather page design-->
      <div>
        <p><?php
        echo ("today in ".$name.": ");
        echo ($data['weather'][0]['description'].", ");
        echo ("temperature: ".$data['main']['temp']."*C");
         ?></p>
      </div>
