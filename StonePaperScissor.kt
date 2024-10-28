fun main(){
    print("Users choice : ")
    // println()
    var uc = readLine()!!.toString()
    uc = uc.lowercase()
    var choices:Array<String> = arrayOf("rock","paper","scissor")
    var num = (0..2).random()
    var cc = choices[num]
    println("Computers choice : " + cc)
    var result = when{
        // if they both got the same then draw
        cc == uc -> "Draw"
        // cases for computer to win the game
        (cc == "rock" && uc == "scissor")||
        (cc == "paper" && uc == "rock")||
        (cc == "scissor" && uc == "paper") -> "Computer Wins"
        // cases for user to win the game 
        (uc == "rock" && cc == "scissor")||
        (uc == "paper" && cc == "rock")||
        (uc == "scissor" && cc == "paper") -> "Hurray! you won"
        else -> "wrong choice"
    }
    println(result)
}