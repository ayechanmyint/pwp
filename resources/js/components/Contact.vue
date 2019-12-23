<template>
<div id="body">
                    <div class="col-md-12" id="#contact_us" style="background-color:#5b5e57;color:#fff;">
                     <div class="col-md-1"> </div>
                      <div class="col-md-10">
                     
							<div class="row">
								<div class="col-md-4">
									<h3>Add Contact</h3>
									<div class="form-group">
										<label for="name">Name</label>
										<input type="text" id="name" name="name" v-model="newContact.name" class="form-control" placeholder="Name"></input>
									</div>
									<div class="form-group">
										<label for="address">Email</label>
										<input type="email" id="email" name="email" v-model="newContact.email" class="form-control" placeholder="Email "></input>		
																		
									</div>
									<div class="form-group">
										<label for="name">Subject</label>
										<input type="text" id="subject" name="subject" v-model="newContact.subject" class="form-control" placeholder="Subject"></input>
									</div>
									<div class="form-group">
										<label for="name">Message</label>
										<input type="text" id="message" name="message" v-model="newContact.message" class="form-control" placeholder="Message "></input>
									</div>

								 <button class="btn btn-success" v-on:click="addContact">Add</button>
								</div>
								<div class="col-md-8">
									<h3> Contact List</h3>



								    <div v-for="contact in contacts" class="modal-content col-md-6" style="color:#000;">					
								        <div class="modal-body">
								        	 <p>Address - {{ contact.name }}</p>		       
								          <p>Email :{{ contact.email }}</p>
								           <p>Subject :{{ contact.subject }}</p>
								           <button type="button" class="btn btn-danger" v-on:click="removeContact($index)">X</button>
								        </div>
								    </div>


								</div>
							</div>
                        </div>
                        </div>
</div>
</template>

<script>
export default{
    data(){
    	return{
	 		newContact : {name: "",email:"",subject:"", message:""},
	 		contacts : []    	
    		}

	 	},
	 	methods: {
	 		addContact: function(){
	 			
	 			var name = this.newContact.name.trim();
	 			var email = this.newContact.email.trim();
	 			var subject = this.newContact.subject.trim();
	 			var message = this.newContact.message.trim();
	 			if(name && email && subject && message){
	 				this.contacts.push({name: name, email: email, subject: subject, message: message});
	 				this.newContact={name:"", email:"",subject:"",message:""};
	 				$('#name').focus();
	 			}

	 		},
	 		removeContact: function(index){
	 			this.contacts.splice(index,1);
	 		}
	 	}

}

</script>