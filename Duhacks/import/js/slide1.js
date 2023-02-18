var j=0;
    document.getElementsByName("radio-btn")[j].checked = true;
setInterval(function(){
    for(i=0;i<10;i++)
    {
        if(document.getElementsByName("radio-btn")[i].checked)
        {
            j=i;
            break;
        }
    }

    if(j>8)
    {
        j=0;
    }
    else
    {
        j++;
    }
    document.getElementsByName("radio-btn")[j].checked = true;

    // console.log(document.getElementsByName("radio-btn")[i].checked)
} , 5000);

function leftchange()
{
    var k,l;
    for(k=0;k<10;k++)
    {
        if(document.getElementsByName("radio-btn")[k].checked)
        {
            l=k;
            break;
        }
    }
    if(l<1)
    {
        k=9;
    }
    else
    {
        k--;
    }
    document.getElementsByName("radio-btn")[k].checked = true;
}

function rightchange()
{
    var k,l;
    for(k=0;k<10;k++)
    {
        if(document.getElementsByName("radio-btn")[k].checked)
        {
            l=k;
            break;
        }
    }
    if(l>8)
    {
        k=0;
    }
    else
    {
        k++;
    }
    document.getElementsByName("radio-btn")[k].checked = true;
}