
<style>
    .img-circle{
        border-radius: 50%;
    }

    .profile-user-img{
        border: 3px solid #adb5bd;
        margin: 0 auto;
        padding: 3px;
        width: 100px;
    }

    .img-fluid{
        max-width: 100%;
        height: auto;
    }

    img{
        vertical-align: middle;
        border-style: none;
    }
</style>
<div class="card card-info">
    <div class="card-header">
        <h3 class="card-title">User Details</h3>
    </div>

    <div class="card-body">
        <div class="row mb-3">
            <div class="form-group col-2">
                <label for="user_pic">Profile Picture</label>
                <div class="text-center">
                    <img class="profile-user-img img-fluid img-circle" src="{{ asset('storage/user-pics/'.$user->user_pic) }}" alt="User profile picture">
                    <br> <a href="#" onclick="clickInputFile()">[Change Profile Picture]</a>
                    <form id="uploadForm" action="/userpic_change/{{ $user->id }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input id="userChangeProfilePic" type="file" class="form-control" style="display: none;" accept="image/png, image/jpeg">
                    </form>
                </div>
            </div>
            <div class="form-group col-3">
                <label for="fname">First Name</label>
                <input type="text" class="form-control" id="fname" value="{{ $user->fname }}" required>
            </div>
            <div class="form-group col-3">
                <label for="mname">Middle Name</label>
                <input type="text" class="form-control" id="mname" value="{{ $user->mname }}" >
            </div>
            <div class="form-group col-3">
                <label for="lname">Last Name</label>
                <input type="text" class="form-control" id="lname" value="{{ $user->lname }}" required>
            </div>
            <div class="form-group col-1">
                <label for="ext">Ext</label>
                <input type="text" class="form-control" id="ext" value="{{ $user->ext }}" >
            </div>
        </div> 
        
        <div class="row mb-3">
            <div class="form-group col-4">
                <label for="email">Email address</label>
                <input type="email" class="form-control" id="email" value="{{ $user->email }}" required>
            </div>
            <div class="form-group col-4">
                <label for="contact_num">Contact Number</label>
                <input type="text" class="form-control" id="contact_num" value="{{ $user->contact_num }}" required>
            </div>
            <div class="form-group col-4">
                <label for="birthdate">Birth Date</label>
                <input type="date" class="form-control" id="date" value="{{ $user->birthdate }}" >
            </div>
        </div>

        <div class="row mb-3">
            <div class="form-group col-12">
                <label for="address">Address</label>
                <input type="text" class="form-control" id="address" value="{{ $user->address }}" required>
            </div>
        </div> 

        @if($user->usertype == 3)
        <div class="row">
            <div class="form-group col-12">
                <label for="upload_file">Submitted File Preview</label>
                <iframe src="{{ asset('storage/uploads/'.$user->upload_file) }}" style="width: 100%; height: 500px;">
                </iframe>
            </div>
        </div>
        @endif
    </div>

    <div class="card-footer">
        <button class="btn btn-primary" onclick="hideDetails();">Save</button>
        <button class="btn btn-secondary" onclick="hideDetails();">Close</button>
    </div>
</div>
<script>
    function clickInputFile(){
        $('#userChangeProfilePic').click();
    }
</script>