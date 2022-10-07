let nome=[
["dede@hotmail.com","vasco123","Dede"],
["luquinhas@hotmail.com","ironmaiden123","Luqueta"],
["cainho@hotmail.com","caio123","Caiobas"]
];

let n = nome.length;
function login(){
    let user= document.getElementById("email");
    let pass= document.getElementById("senha");
    let i;
    pass = pass.value
    user = user.value
    for(i=0;i<n;i++){
        if(nome[i][0] == user){
            if(nome[i][1] == pass){
                var a = document.createElement("a");
                a.href = 'index.html';
                a.click();
                alert("Seja bem vindo(a)");
                break;
            }
            else{
                alert('Senha incorreta')
            }
        }
    }
}

