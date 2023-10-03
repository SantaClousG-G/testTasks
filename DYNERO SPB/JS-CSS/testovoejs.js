function setGetParams(newGetParams) {
	    let newString
        for(key in newGetParams)
            newString += (newString ? '&' : '') + key + '=' + newGetParams[i]
        return window.location.href + '?' + newString
        
}
    