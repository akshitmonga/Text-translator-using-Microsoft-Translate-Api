# Text-translator-using-Microsoft-Translate-Api
Interface to support translation between different languages. 

Provides an interface to help user translate any one language to any other language. It uses Microsoft Translate API that provides support for translation. 
It also Provides error tracking i.e. User can report error if they got any different output as expected while translating text.
MySQL is used for storing error in the database. Also errors can be viewed in view_error.php by extracting the errors stored in the database and displaying it to the frontend.
Also, there is a "complete interaction" button which is a qualtrics survey having some questions to get feedback about the interface.

To Run it  :-

You have to generate a Microsoft Translate API key and replace the generated key in index.php where variable key is defined. 
