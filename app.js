
// token and api
const api = "https://gorest.co.in/public/v1/users";
const token = "d7c01847de4c083cb154e9a533294301e9f05f93dbae7d589e42ece63226c0a3";

// fetch data
fetch(api, {
    headers: {
        Authorization: `Bearer ${token}`
    }
})
    .then(res => res.json())
    .then(data => console.log(data))