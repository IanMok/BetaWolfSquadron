<script>
	//retreiving the modal box 
	var modal = document.getElementById('modalTest');

	//  retrieves image to place into modal box Get the image and insert it inside the modal 
	var img = document.getElementById('imgTest');
	var modalImg = document.getElementById("archie");
	var captionText = document.getElementById("caption"); //creates a caption for modal.
		img.onclick = function(){
    		modal.style.display = "block";
    		modalImg.src = this.src;
    		captionText.innerHTML = this.alt;
		}

	// Get the <span> element that closes the modal
	var span = document.getElementsByClassName("close")[0];

	// When the user clicks on <span> (x), close the modal
	span.onclick = function() { 
  		modal.style.display = "none";
	}
</script>