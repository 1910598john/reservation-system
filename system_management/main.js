//setings button function..
$(document).ready(function(){
    let settings = document.getElementById("settings");
    //is created?
    var panel_created = false;
    //settings function
    function _settings() {
        let container = document.getElementById("system-management-panel");
        //render html elements
        container.insertAdjacentHTML("afterbegin", `
        <div class="user-management" id="user-management">
            <div class="hide-remove-panel" id="hide-panel">
                <i class="fa-solid fa-xmark"></i>
            </div>
            <div class="hotel-name">
                <span>King Inns</span>
            </div>
            <div class="user-management-options">
                <div class="add-user" id="add-user">
                    <div class="icon">
                        <i class="fa-solid fa-user-plus"></i>
                    </div>
                    <span>Add User</span>
                </div>
                <div class="user-history" id="user-history">
                    <div class="icon">
                        <i class="fa-solid fa-user-check"></i>
                    </div>
                    <span>Users</span>
                </div>
                <div class="view-all-users" id="view-all-users">
                    <div class="icon">
                        <i class="fa-solid fa-users"></i>
                    </div>
                    <span>All Users</span>
                </div>
            </div>
        </div>`);
        //hide rendered html elements
        let hide = document.getElementById("hide-panel");
        hide.addEventListener("click", function(){
            this.parentElement.remove();
            panel_created = false;
        })
        //change background color on click
        $(".user-management-options > div").click(function(){
            let container = document.getElementById("user-management");
            //if add-user..
            function add_user() {
                container.insertAdjacentHTML("afterbegin", `
                <div class="user-management-overlay">
                    <div class="hotel-name">
                        <span>King Inns</span>
                    </div>
                    <div class="overlay-content">
                        <input type="text" id="username" placeholder="Username">
                        <input type="text" id="password" placeholder="Password">
                        <div">
                            <input type="checkbox" id="is-admin" value="isAdmin">
                            <input type="button" id="add-user" value="Add User">
                        </div>
                    </div>
                </div>`)
            }
            //if users..
            function users(){
                alert("viewing users history");
            }
            //if all users..
            function all_users(){
                alert("viewing all users..");
            }
            if ($(this).attr("id") == "add-user") {add_user()};
            if ($(this).attr("id") == "user-history") {users()};
            if ($(this).attr("id") == "view-all-users") {all_users()};
            $(this).css("background", "var(--dark)");
        })
        
    }
    //settings
    settings.addEventListener("click", function(){
        if (panel_created !== true) {
            panel_created =  true;
            //call settings function
            _settings();
        }
    })
})