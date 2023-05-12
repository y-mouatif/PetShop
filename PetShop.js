function setCurrentTime() {
    let myDate = new Date();
  
    let days = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
    let months= ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Aug', 'Oct', 'Nov', 'Dec'];
  
  
    let date = myDate.getDate();
    let month = months[myDate.getMonth()];
    let year = myDate.getFullYear();
    let day = days[myDate.getDay()];
    let minutes = myDate.getMinutes();
    let seconds = myDate.getSeconds();
  
    let today = month +" "+ date+ ", "+year +", " + day;

    let amOrPm;
    let twelveHours = function() {
      if (myDate.getHours() > 12) {
        amOrPm = 'PM';
        let twentyFourHourTime = myDate.getHours();
        let conversion = twentyFourHourTime - 12;
        return conversion;
  
      } else {
        amOrPm = 'AM';
        return myDate.getHours();
      }
    };

    let hours = twelveHours();
  
    let currentTime = `${hours}:${minutes}:${seconds} ${amOrPm}`;
    
    document.getElementById('time').innerText = today + ' ' + currentTime;
  }

  setInterval(function() {
    setCurrentTime();
  }, 1000);