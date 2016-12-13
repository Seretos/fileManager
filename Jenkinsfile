node {
    stage('Preparation') {
        env.PATH = "${tool 'Ant'}/bin:${env.PATH}"

        //download the git repository
        checkout scm
    }
    stage('Validation'){
        //execute apache ant build bot
        sh 'ant'
    }
    stage('Results'){
        junit 'build/logs/junit.xml'

        step([$class: 'hudson.plugins.checkstyle.CheckStylePublisher', pattern: '**/build/logs/checkstyle.xml'])
        step([$class: 'CloverPublisher', cloverReportDir: 'build/logs', cloverReportFileName: 'clover.xml'])
        publishHTML([allowMissing: false, alwaysLinkToLastBuild: true, keepAll: true, reportDir: 'build/coverage/', reportFiles: 'index.html', reportName: 'code coverage'])
        publishHTML([allowMissing: false, alwaysLinkToLastBuild: true, keepAll: true, reportDir: 'build/api/', reportFiles: 'index.html', reportName: 'phpdox'])
    }
}
