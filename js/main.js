$(function(){ 
  function loadContentForSectionPromise(targetSelector, fileName){
  	var deferred = Q.defer();

  	function successCallback(){
		deferred.resolve();
  	}

  	function errorCalback(){
  		deferred.reject();
  	}

  	$(targetSelector).load(fileName, successCallback, errorCalback);

  	return deferred.promise;
  }
  
 

 	
})